<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl" class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php if ( is_front_page() || is_home() ) : ?>
        <meta name="description" content="وكالة متخصصة في تحسين محركات البحث SEO، نساعد الشركات على زيادة الزيارات العضوية والمبيعات من خلال استراتيجيات مبنية على البيانات. احصل على استشارة مجانية." />
        <meta property="og:title" content="Rankaty | نمو حقيقي من نتائج البحث" />
        <meta property="og:description" content="وكالة متخصصة في تحسين محركات البحث SEO لزيادة الزيارات العضوية والمبيعات." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
        <meta property="og:site_name" content="Rankaty" />
    <?php endif; ?>

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- JSON-LD Schema -->
    <?php if ( is_front_page() || is_home() ) : ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SEOAgency",
      "name": "Rankaty",
      "url": "<?php echo esc_url(home_url('/')); ?>",
      "description": "وكالة متخصصة في تحسين محركات البحث SEO، نساعد الشركات على زيادة الزيارات العضوية والمبيعات من خلال استراتيجيات مبنية على البيانات.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "دبي",
        "addressCountry": "AE"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "email": "<?php echo esc_js( get_theme_mod( 'rankaty_contact_email', 'hello@rankaty.com' ) ); ?>",
        "contactType": "customer service"
      }
    }
    </script>
    <?php endif; ?>

    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon/favicon-96x96.png' ); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon/favicon.svg' ); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon/favicon.ico' ); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon/apple-touch-icon.png' ); ?>" />
    <meta name="apple-mobile-web-app-title" content="Rankaty" />
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon/site.webmanifest' ); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="fixed inset-0 glow-bg pointer-events-none z-0"></div>
    <div id="tsparticles" class="fixed inset-0 z-[1] opacity-30 pointer-events-none mix-blend-screen"></div>

    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 left-0 w-full z-[100] px-6 md:px-12 lg:px-16 py-6 flex justify-between items-center transition-all duration-500 ease-[cubic-bezier(0.23,1,0.32,1)]">
        <!-- Smooth Nav Background -->
        <div id="nav-bg" class="absolute inset-0 bg-slate-950/80 backdrop-blur-xl border-b border-white/[0.05] opacity-0 transition-opacity duration-500 pointer-events-none -z-10"></div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold tracking-tighter uppercase relative z-[60]" style="font-family: var(--font-title);">
            Ranka<span class="text-blue-500">ty</span>
        </a>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => 'div',
            'container_class'=> 'hidden md:flex space-x-reverse space-x-10 text-sm font-medium opacity-80 nav-container',
            'menu_class'     => 'flex space-x-reverse space-x-10',
            'fallback_cb'    => function() {
                ?>
                <div class="hidden md:flex space-x-reverse space-x-10 text-sm font-medium opacity-80 nav-links">
                    <a href="<?php echo esc_url(home_url('/')); ?>#" class="nav-item hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">الرئيسية</a>
                    <a href="<?php echo esc_url(home_url('/')); ?>#offers" class="nav-item hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">الباقات</a>
                    <a href="<?php echo esc_url(home_url('/')); ?>#results" class="nav-item hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">شركاء النجاح</a>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-item hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">المدونة</a>
                </div>
                <?php
            }
        ) );
        ?>

        <?php $whatsapp_number = preg_replace('/[^0-9+]/', '', get_theme_mod('rankaty_whatsapp_number', '+201007462953')); ?>
        <a href="https://wa.me/<?php echo esc_attr( ltrim( $whatsapp_number, '+' ) ); ?>" class="hidden md:flex items-center text-sm font-bold border border-blue-500/20 bg-blue-500/5 px-6 py-3 rounded-full hover:bg-blue-600 hover:border-blue-600 hover:text-white hover:shadow-[0_0_20px_rgba(59,130,246,0.35)] focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-500 group">
            <span dir="rtl">تحليل موقعك مجاناً</span>
        </a>

        <!-- Mobile Toggle -->
        <button id="mobile-menu-btn" aria-label="القائمة الرئيسية" aria-expanded="false" aria-controls="mobile-menu" class="md:hidden relative z-[60] text-white w-10 h-10 flex justify-center items-center">
            <!-- Hamburger Icon -->
            <svg id="menu-icon-open" class="w-6 h-6 absolute transition-all duration-300 transform opacity-100 rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <!-- X Icon -->
            <svg id="menu-icon-close" class="w-6 h-6 absolute transition-all duration-300 transform opacity-0 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-slate-950/95 backdrop-blur-xl z-[90] flex flex-col justify-center items-center gap-8 opacity-0 invisible transition-all duration-500">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'mobile',
            'container'      => false,
            'items_wrap'     => '%3$s',
            'fallback_cb'    => function() {
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>#" class="mobile-link text-2xl font-bold hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">الرئيسية</a>
                <a href="<?php echo esc_url(home_url('/')); ?>#offers" class="mobile-link text-2xl font-bold hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">الباقات</a>
                <a href="<?php echo esc_url(home_url('/')); ?>#results" class="mobile-link text-2xl font-bold hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">شركاء النجاح</a>
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="mobile-link text-2xl font-bold hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition">المدونة</a>
                <?php
            }
        ) );
        ?>
        <a href="https://wa.me/<?php echo esc_attr( ltrim( $whatsapp_number, '+' ) ); ?>" class="mobile-link mt-4 w-[80%] max-w-sm flex justify-center items-center text-center text-lg font-bold border border-blue-500/20 bg-blue-500/10 px-8 py-4 rounded-full text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <span dir="rtl">تحليل موقعك مجاناً</span>
        </a>
    </div>
