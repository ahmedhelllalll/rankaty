const fs = require('fs');

const content = fs.readFileSync('front-page.php', 'utf8');

const parts = [
    { name: 'hero', start: '<!-- Hero -->', end: '<!-- SEO Tools Logo Ticker -->' },
    { name: 'logo-ticker', start: '<!-- SEO Tools Logo Ticker -->', end: '<!-- The Rankaty Effect Graph -->' },
    { name: 'rankaty-effect', start: '<!-- The Rankaty Effect Graph -->', end: '<!-- Problem + Solution 2-Card Layout -->' },
    { name: 'problem-solution', start: '<!-- Problem + Solution 2-Card Layout -->', end: '<!-- Results Section -->' },
    { name: 'results', start: '<!-- Results Section -->', end: '<!-- Offers -->' },
    { name: 'offers', start: '<!-- Offers -->', end: '<!-- Blog Section -->' },
    { name: 'blog-section', start: '<!-- Blog Section -->', end: '<!-- FAQ Section -->' },
    { name: 'faq', start: '<!-- FAQ Section -->', end: '<!-- Contact Form Section -->' },
    { name: 'contact', start: '<!-- Contact Form Section -->', end: '</main>' }
];

let newFrontPage = `<?php
/**
 * The front page template file
 */

get_header(); ?>

<main>
`;

parts.forEach(part => {
    const startIndex = content.indexOf(part.start);
    const endIndex = content.indexOf(part.end);
    if (startIndex !== -1 && endIndex !== -1) {
        const partContent = content.substring(startIndex, endIndex);
        fs.writeFileSync(`template-parts/home/${part.name}.php`, partContent);
        newFrontPage += `    <?php get_template_part('template-parts/home/${part.name}'); ?>\n`;
    } else {
        console.log(`Could not find bounds for ${part.name}`);
    }
});

newFrontPage += `</main>

<?php get_footer(); ?>
`;

fs.writeFileSync('front-page-new.php', newFrontPage);
console.log('Split complete!');
