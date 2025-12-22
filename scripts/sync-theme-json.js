import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import tailwindConfig from '../tailwind.config.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const THEME_JSON_PATH = path.resolve(__dirname, '../theme.json');

/**
 * Converts Tailwind color object to theme.json palette format.
 */
function mapTailwindColors(colors) {
    const palette = [];
    
    for (const [key, value] of Object.entries(colors)) {
        if (typeof value === 'string') {
            palette.push({
                slug: key,
                color: value,
                name: key.charAt(0).toUpperCase() + key.slice(1).replace(/-/g, ' ')
            });
        } else if (typeof value === 'object') {
            for (const [subKey, subValue] of Object.entries(value)) {
                const slug = subKey === 'DEFAULT' ? key : `${key}-${subKey}`;
                palette.push({
                    slug: slug,
                    color: subValue,
                    name: slug.charAt(0).toUpperCase() + slug.slice(1).replace(/-/g, ' ')
                });
            }
        }
    }
    return palette;
}

/**
 * Converts Tailwind fonts to theme.json format.
 */
function mapTailwindFonts(fonts) {
    return Object.entries(fonts).map(([key, value]) => ({
        fontFamily: Array.isArray(value) ? value[0] : value,
        name: key.charAt(0).toUpperCase() + key.slice(1),
        slug: key
    }));
}

async function sync() {
    try {
        console.log('🔄 Synchronizing Tailwind -> theme.json...');
        
        const themeJson = JSON.parse(fs.readFileSync(THEME_JSON_PATH, 'utf8'));
        const twTheme = tailwindConfig.theme.extend || tailwindConfig.theme;

        // Synchronize colors
        if (twTheme.colors) {
            themeJson.settings.color.palette = mapTailwindColors(twTheme.colors);
        }

        // Synchronize fonts
        if (twTheme.fontFamily) {
            themeJson.settings.typography.fontFamilies = mapTailwindFonts(twTheme.fontFamily);
        }

        // Save updated theme.json
        fs.writeFileSync(THEME_JSON_PATH, JSON.stringify(themeJson, null, 4));
        
        console.log('✅ theme.json updated successfully!');
    } catch (error) {
        console.error('❌ Synchronization error:', error);
    }
}

sync();
