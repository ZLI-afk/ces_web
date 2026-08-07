<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre for Energy Storage (CES)</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="launch-notice" role="status">
        <span data-i18n="launch.notice">To Be Launched in September 2026</span>
    </div>

    <!-- Top utility bar: language switcher -->
    <div class="top-bar">
        <div class="top-bar-inner">
            <div class="lang-switcher">
                <button class="lang-btn active" data-lang="en">EN</button>
                <span class="lang-sep">|</span>
                <button class="lang-btn" data-lang="zh-cn">简</button>
                <span class="lang-sep">|</span>
                <button class="lang-btn" data-lang="zh-tw">繁</button>
            </div>
        </div>
    </div>

    <!-- Logo bar -->
    <header class="site-header">
        <div class="header-inner">
            <a href="#homepage" class="logo-link" aria-label="Centre for Energy Storage homepage">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/ces-logo.png" alt="香港大學儲能中心 - Centre for Energy Storage" class="ces-logo">
            </a>
        </div>
    </header>

    <!-- Main navigation -->
    <nav class="main-nav">
        <ul class="nav-list">
            <li class="nav-item active" data-page="homepage"><a href="#homepage" data-i18n="nav.home">Homepage</a></li>
            <li class="nav-item" data-page="publications"><a href="#publications" data-i18n="nav.pub">Publications</a></li>
            <li class="nav-item" data-page="aqueous-battery-service"><a href="#aqueous-battery-service" data-i18n="nav.service">Aqueous Battery Custom Service</a></li>
            <li class="nav-item" data-page="contact"><a href="#contact" data-i18n="nav.contact">Contact us</a></li>
        </ul>
    </nav>

    <!-- ==================== PAGE: Homepage ==================== -->
    <div class="page-section active" id="page-homepage">
        <section class="hero-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/homepage.png" alt="CES Banner" class="hero-img">
            <div class="hero-overlay">
                <h2 class="hero-text">
                    <span class="hero-title-zh">香港大學儲能中心</span>
                    <span class="hero-title-en">Centre for Energy Storage</span>
                </h2>
            </div>
        </section>
        <main class="site-content">
            <section class="content-section">
                <h2 data-i18n="about.title">About Us</h2>
                <p data-i18n="about.p1">The Centre for Energy Storage at The University of Hong Kong (HKUCES) is an academic hub dedicated to advancing cutting-edge energy storage research and innovation. Rooted in HKU's academic excellence, it focuses on the following strategic directions: safe aqueous energy storage, solid-state batteries, battery recycling, and AI integration for energy storage.</p>
                <p data-i18n="about.p2">The Centre targets on delivering profound social, industrial, and educational impacts. Socially, it tackles urgent global issues like climate change and energy sustainability by supporting renewable energy integration and low-carbon energy transition. Industrially, it drives technology transfer by licensing new energy storage materials and technologies to industry, fostering sector upgrading and a sustainable energy ecosystem. Educationally, it provides top-tier research opportunities in cutting-edge fields like AI for materials, nurturing a new generation of energy leaders capable of guiding the energy transition efforts.</p>
                <h3 data-i18n="goals.title">Core Strategic Goals</h3>
                <p data-i18n="goals.intro">To achieve its mission, the Centre has four core strategic goals. It develops innovative technologies by integrating AI and in-situ characterizations, enhances global R&amp;D through international academic collaborations and knowledge transfer, fosters industry engagement by building a collaboration platform with energy firms and utilities, and elevates HKU's energy storage research through a unified brand to boost international recognition.</p>
                <ul class="goals-list">
                    <li data-i18n-html="goals.g1"><strong>Technological Innovation</strong>: Driving energy storage innovation through the integration of materials advances, and AI technologies.</li>
                    <li data-i18n-html="goals.g2"><strong>Global R&amp;D Collaboration</strong>: Enhancing R&amp;D capabilities through international academic partnerships and knowledge transfer.</li>
                    <li data-i18n-html="goals.g3"><strong>Industry Partnerships</strong>: Catalyzing the transition of laboratory technologies to industry through broad societal collaborations.</li>
                    <li data-i18n-html="goals.g4"><strong>Enhancing International Visibility</strong>: Raising HKU's international profile in energy storage research through strategic branding.</li>
                </ul>
                <h3 data-i18n="vision.title">Vision</h3>
                <p data-i18n="vision.text">More than a research institute, the vision of Centre for Energy Storage at HKU is to serve as a catalyst for energy transition. It targets on merging academic excellence, technological innovation, and societal responsibility to shape a sustainable, low-carbon energy future for Hong Kong and the world.</p>
            </section>
        </main>
    </div>

    <!-- ==================== PAGE: Publications ==================== -->
    <div class="page-section" id="page-publications">
        <main class="site-content">
            <section class="content-section under-construction">
                <div class="uc-icon">&#9881;</div>
                <h2 data-i18n="pub.title">Publications</h2>
                <p class="uc-text" data-i18n="pub.uc">This page is under construction. Please check back later.</p>
            </section>
        </main>
    </div>

    <!-- ==================== PAGE: Aqueous Battery Service ==================== -->
    <div class="page-section" id="page-aqueous-battery-service">
        <div class="subpage-banner">
            <h2 data-i18n="abs.title">Aqueous Battery Custom Service</h2>
        </div>
        <main class="site-content">
            <div class="subpage-layout">
                <!-- Left: sub-menu -->
                <aside class="sub-nav">
                    <ul class="sub-nav-list">
                        <li class="sub-nav-item active" data-subtab="rigid-shell">
                            <a href="#" data-i18n="abs.sub1">Aqueous Rigid-cased Full Batteries (ARFB) Service</a>
                        </li>
                        <li class="sub-nav-item" data-subtab="custom">
                            <a href="#" data-i18n="abs.sub3">Details of the Service</a>
                        </li>
                    </ul>
                    <div class="sidebar-contact-box">
                        <h4 data-i18n="abs.c_contact_title">One-on-One Customization Service:</h4>
                        <p><strong data-i18n="abs.c_contact_name">Zhili Wang</strong></p>
                        <p><span data-i18n="abs.c_contact_email_label">Email</span>: <a href="mailto:1137100644@qq.com" data-i18n="abs.c_contact_email">1137100644@qq.com</a></p>
                        <p><span data-i18n="abs.c_contact_wechat_label">WeChat</span>: <span data-i18n="abs.c_contact_wechat">Zhili_Wang698</span></p>
                    </div>
                </aside>
                <!-- Right: sub-content -->
                <div class="sub-content">

                    <!-- ===== Sub-tab 1: Rigid-Shell ===== -->
                    <div class="sub-tab-panel active" id="subtab-rigid-shell">
                        <h3 data-i18n="abs.sub1_title">Aqueous Rigid-cased Full Batteries (ARFB) Service</h3>
                        <p data-i18n="abs.sub1_intro1">Given the current limitations of laboratory conditions and evaluation models, which rely on coin cells or micro-small pouch cells, the guiding significance for advancing the practical application of emerging aqueous batteries is relatively one-sided and lacking. Meanwhile, by drawing on the successful practical experience of existing aqueous batteries, especially Metal hydride-Nickel batteries and Lead-acid batteries, we recognize that if an aqueous battery under research has the potential for practical application, it is most likely to be presented in the form of a rigid-cased battery.</p>
                        <p data-i18n="abs.sub1_intro2">Rigid-cased encapsulation based on full batteries provides the indispensable threshold: an independent sealed space and tightly assembled structure, sufficient active material (mass and/or volume, reaction capacity and/or charge-discharge depth and/or utilization, path length of mass transfer and current collection), based on limited excesses of matter and space, or chemical/physical buffer conditions.</p>
                        <p data-i18n="abs.sub1_intro3">The ARFB service platform primarily focuses on the transitional phase for research batteries moving towards industrialization. It aims to bridge the gap between current academic research and industrial-level batteries, providing technical and process support services to facilitate and guide various emerging aquatic batteries toward functional maturity.</p>

                        <h4 data-i18n="abs.products_label">Products and Services</h4>

                        <div class="service-products">
                            <article class="service-product-card cylindrical-product">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Cylindrical_Batteries_0807.jpg" alt="AA and F cylindrical batteries" class="service-product-image">
                                <h5 data-i18n="abs.r2_prod">Cylindrical Battery Fabrication and Test</h5>
                            </article>
                            <article class="service-product-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Prismatic_Batteries_single_0807.jpg" alt="P1, P2 and P3 prismatic batteries" class="service-product-image">
                                <h5 data-i18n="abs.r3_prod">Prismatic Batteries (Single Cell)</h5>
                            </article>
                            <article class="service-product-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Prismatic_Batteries_pack.png" alt="Multi-cell prismatic battery assembly" class="service-product-image">
                                <h5 data-i18n="abs.r4_prod">Prismatic Batteries (Multi-Cells)</h5>
                            </article>
                        </div>
                    </div>

                    <!-- ===== Sub-tab 3: Custom ===== -->
                    <div class="sub-tab-panel" id="subtab-custom">
                        <h3 data-i18n="abs.sub3_title">Details of the Service</h3>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_anode_title">If you are conducting research related to the negative electrodes:</h4>
                            <p data-i18n-html="abs.c_anode_text">We can produce negative electrodes according to the methods and/or key materials you provide, and then match positive electrodes, such as conventional manganese dioxide electrodes, vanadium oxide electrodes, iodine electrodes, nickel electrodes, etc. We can also develop unconventional positive electrodes as you specify or provide key materials (which may cost a little more time for electrode development). Other components, such as electrolytes and separators, can be specified or provided by you, or we can match them ourselves according to your needs.</p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_cathode_title">If you are conducting research related to the positive electrodes:</h4>
                            <p data-i18n-html="abs.c_cathode_text">We can produce positive electrodes according to the methods and/or key materials you provide, and then match negative electrodes, such as conventional zinc mental foil, zinc metal powder electrodes, zinc oxide powder electrodes, etc. We can also develop unconventional negative electrodes as you specify or provide key materials (which may cost a little more time for electrode development). Other components, such as electrolytes and separators, can be specified or provided by you, or we can match them ourselves according to your needs.</p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_elec_title">If you are conducting research related to the electrolytes:</h4>
                            <p data-i18n="abs.c_elec_text">You can directly provide the special electrolytes, or we can prepare them according to the methods and/or materials you specify or provide. We can match the conventional positive and negative electrodes listed above, or develop unconventional electrodes as you specify or provide key materials (which may cost a little more time for electrode development).</p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_other_title">If you are conducting research related to the separators or current collectors:</h4>
                            <p data-i18n-html="abs.c_other_text">You can directly provide the special materials that meet the dimensional requirements, and we can match the conventional positive and negative electrodes listed above, or we can develop unconventional electrodes as you specify or provide key materials (which may cost a little more time for electrode development).</p>
                        </div>

                    </div>

                </div>
            </div>

        </main>
    </div>

    <!-- ==================== PAGE: Contact ==================== -->
    <div class="page-section" id="page-contact">
        <main class="site-content">
            <section class="content-section">
                <h2 data-i18n="contact.title">Contact</h2>

                <div class="contact-layout">
                    <!-- Left: contact info -->
                    <div class="contact-info">
                        <div class="contact-info-block">
                            <h3 data-i18n="contact.center_name">Centre for Energy Storage (CES)</h3>
                            <p data-i18n="contact.univ">The University of Hong Kong</p>
                        </div>

                        <div class="contact-info-block">
                            <h4 data-i18n="contact.person_label">Contact Person</h4>
                            <p data-i18n="contact.person_name">Zhili Wang</p>
                            <p><span data-i18n="contact.email_label">Email</span>: <a href="mailto:1137100644@qq.com" data-i18n="contact.email">1137100644@qq.com</a></p>
                            <p><span data-i18n="contact.wechat_label">WeChat</span>: <span data-i18n="contact.wechat">Zhili_Wang698</span></p>
                        </div>

                        <div class="contact-qr">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wechat-zhili-wang.png" alt="WeChat QR code for Zhili Wang">
                            <p data-i18n="contact.wechat_qr">Scan to add Zhili Wang on WeChat.</p>
                        </div>

                        <div class="contact-info-block">
                            <h4 data-i18n="contact.hours_label">Office Hours</h4>
                            <p data-i18n="contact.hours_text">Mon–Fri: 9:30 – 18:00 (GMT+8)</p>
                        </div>

                        <div class="contact-campus-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/hku_mb.jpg" alt="HKU Campus">
                        </div>
                    </div>

                    <!-- Right: contact form -->
                    <div class="contact-form-wrapper">
                        <h3 data-i18n="contact.form_title">Leave Your Contact Information</h3>
                        <p class="form-desc" data-i18n="contact.form_desc">We will get back to you as soon as possible.</p>
                        <form id="contact-form" class="contact-form">
                            <div class="form-group">
                                <label for="cf-name" data-i18n="contact.form_name">Name *</label>
                                <input type="text" id="cf-name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="cf-email" data-i18n="contact.form_email">Email *</label>
                                <input type="email" id="cf-email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="cf-phone" data-i18n="contact.form_phone">Phone</label>
                                <input type="tel" id="cf-phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="cf-org" data-i18n="contact.form_org">Organization</label>
                                <input type="text" id="cf-org" name="organization">
                            </div>
                            <div class="form-group">
                                <label for="cf-message" data-i18n="contact.form_msg">Message *</label>
                                <textarea id="cf-message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="form-submit" data-i18n="contact.form_submit">Submit</button>
                        </form>
                        <div id="form-success" class="form-success" style="display:none;">
                            <p data-i18n="contact.form_ok">Your information has been submitted successfully. Thank you!</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner">
            <p data-i18n="footer.copy">&copy; 2026 Centre for Energy Storage (CES), The University of Hong Kong. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo time(); ?>"></script>
    <?php wp_footer(); ?>
</body>
</html>
