/*
 * CSS Architecture Manifest
 * 
 * This file describes the modular CSS structure for easy maintenance
 * 
 * FILE STRUCTURE:
 * ┌─────────────────────────────────────────────────────────────┐
 * │ base.css        - Global reset, typography, basic styles    │
 * │ layout.css      - Containers, grid, navigation, forms       │
 * │ components.css  - Buttons, inputs, cards, badges, alerts    │
 * │ theme.css       - Color schemes, gradients, CSS variables   │
 * │ utilities.css   - Helper classes, animations, utilities     │
 * │ responsive.css  - Media queries for all device sizes        │
 * └─────────────────────────────────────────────────────────────┘
 * 
 * LOAD ORDER:
 * 1. base.css (foundation)
 * 2. layout.css (structure)
 * 3. components.css (UI elements)
 * 4. theme.css (colors/gradients)
 * 5. utilities.css (helpers)
 * 6. responsive.css (media queries)
 * 
 * MAINTENANCE TIPS:
 * - Keep files focused on their purpose
 * - Use CSS variables in theme.css for easy color changes
 * - Add new responsive breakpoints to responsive.css
 * - Utility classes go in utilities.css
 * - Component-specific styles stay in components.css
 */

/* This file can be used for documentation purposes only */
/* No actual CSS rules should be added here */
