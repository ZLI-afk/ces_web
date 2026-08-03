<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center for Energy Storage (CES)</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

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
            <a href="#homepage" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/HKU_logo_wb.jpg" alt="The University of Hong Kong" class="hku-logo">
            </a>
            <div class="header-title">
                <h1 class="site-title" data-i18n="header.title">Center for Energy Storage</h1>
                <p class="site-subtitle">(CES)</p>
            </div>
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
                <h2 class="hero-text" data-i18n="hero.title">Center for Energy Storage</h2>
            </div>
        </section>
        <main class="site-content">
            <section class="content-section">
                <h2 data-i18n="about.title">About Us</h2>
                <p data-i18n="about.p1">Founded in 2025, the Center for Energy Storage at The University of Hong Kong (HKU) is an academic hub dedicated to advancing cutting-edge energy storage research and innovation. Rooted in HKU's academic excellence, it focuses on five strategic directions: safe aqueous energy storage, solid-state batteries, battery recycling, AI integration for batteries, and new battery chemistries.</p>
                <p data-i18n="about.p2">The Center targets on delivering profound social, industrial, and educational impacts. Socially, it tackles urgent global issues like climate change and energy sustainability by supporting renewable energy integration and low-carbon energy transition. Industrially, it drives technology transfer by licensing new battery chemistries to industry, fostering sector upgrading and a sustainable energy ecosystem. Educationally, it provides top-tier research opportunities in cutting-edge fields like AI for batteries, nurturing a new generation of energy leaders capable of guiding global transition efforts.</p>
                <h3 data-i18n="goals.title">Core Strategic Goals</h3>
                <p data-i18n="goals.intro">To achieve its mission, the Center has four core strategic goals. It develops innovative technologies by integrating AI and in-situ characterizations, enhances global R&amp;D through international academic collaborations and knowledge transfer, fosters industry engagement by building a collaboration platform with energy firms and utilities, and elevates HKU's energy storage research through a unified brand to boost international recognition.</p>
                <ul class="goals-list">
                    <li data-i18n-html="goals.g1"><strong>Technological Innovation</strong>: Driving energy storage innovation through the integration of AI and in-situ characterization technologies.</li>
                    <li data-i18n-html="goals.g2"><strong>Global R&amp;D Collaboration</strong>: Enhancing R&amp;D capabilities through international academic partnerships and knowledge transfer.</li>
                    <li data-i18n-html="goals.g3"><strong>Industry Partnerships</strong>: Catalyzing the transition of laboratory technologies to industry through broad societal collaborations.</li>
                    <li data-i18n-html="goals.g4"><strong>Enhancing International Visibility</strong>: Raising HKU's international profile in energy storage research through strategic branding.</li>
                </ul>
                <h3 data-i18n="vision.title">Vision</h3>
                <p data-i18n="vision.text">More than a research institute, the vision of Center for Energy Storage at HKU is to serve as a catalyst for energy transition. It targets on merging academic excellence, technological innovation, and societal responsibility to shape a sustainable, low-carbon energy future for Hong Kong and the world.</p>
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
                        <li class="sub-nav-item" data-subtab="pouch">
                            <a href="#" data-i18n="abs.sub2">Aqueous Pouch Cell Service</a>
                        </li>
                        <li class="sub-nav-item" data-subtab="custom">
                            <a href="#" data-i18n="abs.sub3">Introduction for the customization</a>
                        </li>
                    </ul>
                    <div class="sidebar-contact-box">
                        <h4 data-i18n="abs.c_contact_title">One-on-One Customization Service:</h4>
                        <p><strong data-i18n="abs.c_contact_name">Dr. Zhu</strong></p>
                        <p><span data-i18n="abs.c_contact_email_label">Email</span>: <a href="mailto:jiaxiong.zhu@my.cityu.edu.hk" data-i18n="abs.c_contact_email">jiaxiong.zhu@my.cityu.edu.hk</a></p>
                        <p><span data-i18n="abs.c_contact_wechat_label">WeChat</span>: <span data-i18n="abs.c_contact_wechat">136 3285 5467</span></p>
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

                        <h4 data-i18n="abs.products_label">Products/Batteries We Offer:</h4>

                        <table class="service-table">
                            <thead>
                                <tr>
                                    <th data-i18n="abs.th_product">Display</th>
                                    <th data-i18n="abs.th_feature">Feature Description</th>
                                    <th data-i18n="abs.th_process">Process Introduction</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/high-loading_electrodes.jpg" alt="High-loading Electrode" class="product-img"><span data-i18n="abs.r1_prod">High-loading electrodes:</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r1_f1">Adaptable to various active material scenarios.</li>
                                            <li data-i18n="abs.r1_f2">Multiple current collector options.</li>
                                            <li data-i18n="abs.r1_f3">Adaptable to high carbon addition, various loading mass/density requirements.</li>
                                            <li data-i18n="abs.r1_f4"></li>
                                            <li data-i18n="abs.r1_f5"></li>
                                            <li data-i18n="abs.r1_f6">Uniform and aesthetically pleasing, without cracking or powder shedding.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r1_p1">Dry grinding dispersion.</li>
                                            <li data-i18n="abs.r1_p2">Wet mixing uniform.</li>
                                            <li data-i18n="abs.r1_p3">High-precision film.</li>
                                            <li data-i18n="abs.r1_p4">High-precision composition</li>
                                            <li data-i18n="abs.r1_p5">High-pressure compaction.</li>
                                            <li data-i18n="abs.r1_p6">Welded tabs (metal).</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Cylindrical_Batteries.jpg" alt="Cylindrical Battery" class="product-img"><span data-i18n="abs.r2_prod">Cylindrical Batteries:</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r2_f1">Ultra-high internal pressure upper limit (&le;4 MPa).</li>
                                            <li data-i18n="abs.r2_f2">Multiple options (AA/SC/D/F types).</li>
                                            <li data-i18n="abs.r2_f3">Customization: capacity, appearance (colors, labels).</li>
                                            <li data-i18n="abs.r2_f4">External series/parallel options.</li>
                                            <li data-i18n="abs.r2_f5"></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r2_p1">Wound cell.</li>
                                            <li data-i18n="abs.r2_p2">Nickel-plated SPCC cases.</li>
                                            <li data-i18n="abs.r2_p3">Non-alkaline, only supports lean electrolytes.</li>
                                            <li data-i18n="abs.r2_p4">Strongly alkaline, can support non-lean electrolytes.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Prismatic_Batteries_single.jpg" alt="Prismatic Battery Single" class="product-img"><span data-i18n="abs.r3_prod">Prismatic Batteries (single)</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r3_f1">Injection molding and 3D printing options.</li>
                                            <li data-i18n="abs.r3_f2">Customization: size, shape, appearance (colors, labels).</li>
                                            <li data-i18n="abs.r3_f3">External series/parallel options.</li>
                                            <li data-i18n="abs.r3_f4"></li>
                                            <li data-i18n="abs.r3_f5"></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r3_p1">Stacked cell (Internal parallel).</li>
                                            <li data-i18n="abs.r3_p2">ABS cases.</li>
                                            <li data-i18n="abs.r3_p3">Welded tabs and busbars.</li>
                                            <li data-i18n="abs.r3_p4">Support acid/mild/alkaline, lean/non-lean electrolytes.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Prismatic_Batteries_pack.png" alt="Prismatic Battery Pack" class="product-img"><span data-i18n="abs.r4_prod">Prismatic Batteries (pack)</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r4_f1">High-strength injection molding cases.</li>
                                            <li data-i18n="abs.r4_f2">Mainly 6-cell-series packs.</li>
                                            <li data-i18n="abs.r4_f3">Customization: size, shape, appearance (colors, labels).</li>
                                            <li data-i18n="abs.r4_f4">External series/parallel options.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r4_p1">Internal series/parallel.</li>
                                            <li data-i18n="abs.r4_p2">ABS cases.</li>
                                            <li data-i18n="abs.r4_p3">Welded tabs and busbars.</li>
                                            <li data-i18n="abs.r4_p4">Support acid/mild/alkaline, lean/non-lean electrolytes.</li>
                                            <li data-i18n="abs.r4_p5">Integrated safety valve.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- ===== Sub-tab 2: Pouch ===== -->
                    <div class="sub-tab-panel" id="subtab-pouch">
                        <h3 data-i18n="abs.sub2_title">Aqueous Pouch Cell Service:</h3>
                        <p data-i18n="abs.sub2_intro1">If you only need simple encapsulation model or wish to complete the final manufacturing by yourself, you can choose the pouch cell. We can provide individual components of the battery as required, such as positive and negative electrodes as your desired specifications (which can include welded tabs). We can also provide dry cells with customized parameters, injecting electrolytes to complete the batteries in one step.</p>
                        <p data-i18n="abs.sub2_intro2">You can also customize full cells and subsequent testing, with differences mainly in stacking layers and encapsulation materials, while other aspects are basically the same as the Prismatic Batteries (single).</p>
                        <p data-i18n="abs.sub2_intro3">Pouch cells cannot maintain their size/volume and tight assembly state independently, so you can choose an auxiliary clamp for testing.</p>

                        <h4 data-i18n="abs.products_label">Products/Batteries We Offer:</h4>

                        <table class="service-table">
                            <thead>
                                <tr>
                                    <th data-i18n="abs.th_product">Display</th>
                                    <th data-i18n="abs.th_feature">Feature Description</th>
                                    <th data-i18n="abs.th_process">Process Introduction</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/high-loading_electrodes.jpg" alt="High-loading Electrode" class="product-img"><span data-i18n="abs.p1_prod">High-loading electrodes:</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r1_f1">Adaptable to various active materials</li>
                                            <li data-i18n="abs.r1_f2">Multiple current collector options</li>
                                            <li data-i18n="abs.r1_f3">Supports high carbon additive content</li>
                                            <li data-i18n="abs.r1_f4">Supports various loading requirements</li>
                                            <li data-i18n="abs.r1_f5">Supports different compaction densities</li>
                                            <li data-i18n="abs.r1_f6">Uniform and crack-free, no powder shedding</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.r1_p1">Dry grinding for thorough raw material dispersion</li>
                                            <li data-i18n="abs.r1_p2">Uniform wet mixing</li>
                                            <li data-i18n="abs.r1_p3">High-precision film casting</li>
                                            <li data-i18n="abs.r1_p4">High-precision lamination</li>
                                            <li data-i18n="abs.r1_p5">High-pressure precision roll pressing</li>
                                            <li data-i18n="abs.p1_p6">Welded tabs (metal).</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/pouch_cell_dry.png" alt="Pouch Dry Cell" class="product-img"><span data-i18n="abs.p2_prod">Pouch cell (dry cell)</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.p2_f1">Customization: size, shape, appearance (colors, labels).</li>
                                            <li data-i18n="abs.p2_f2"></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.p2_p1">Stacked cell (Internal parallel).</li>
                                            <li data-i18n="abs.p2_p2">Packing by APL or PP.</li>
                                            <li data-i18n="abs.p2_p3">Welded tabs and busbars.</li>
                                            <li data-i18n="abs.p2_p4">Support acid/mild/alkaline, lean/non-lean electrolytes.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/pouch_cell_full.jpg" alt="Pouch Full Battery" class="product-img"><span data-i18n="abs.p3_prod">Pouch cell (full cell)</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.p2_f1">Customization: size, shape, appearance (colors, labels).</li>
                                            <li data-i18n="abs.p2_f2"></li>
                                        </ul>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/assets/battery/Auxiliary_clamp.jpg" alt="Test Fixture" class="product-img"><span data-i18n="abs.p4_prod">Auxiliary clamp</span></td>
                                    <td>
                                        <ul class="feature-list">
                                            <li data-i18n="abs.p4_f1">High-strength parallel plate clamp.</li>
                                            <li data-i18n="abs.p4_f2">Aluminum alloy or plexiglass.</li>
                                            <li data-i18n="abs.p4_f3">Spring force provides pressure.</li>
                                        </ul>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- ===== Sub-tab 3: Custom ===== -->
                    <div class="sub-tab-panel" id="subtab-custom">
                        <h3 data-i18n="abs.sub3_title">Introduction for the customization:</h3>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_anode_title">If you are conducting research related to the negative electrodes:</h4>
                            <p data-i18n-html="abs.c_anode_text">We can produce negative electrodes according to the methods and/or key materials you provide, and then match positive electrodes, such as conventional manganese dioxide electrodes, vanadium oxide electrodes, iodine electrodes, nickel electrodes, etc. We can also develop unconventional positive electrodes as you specify or provide key materials (which may cost a little more time for electrode development). Other components, such as electrolytes and separators, can be specified or provided by you, or we can match them ourselves according to your needs.</p>
                            <p class="click-link-line"><span data-i18n="abs.c_cathode_info_prefix">Conventional Positive Electrodes:</span> <a href="#" class="info-link" data-modal="cathode-info" data-i18n="abs.c_click">Click here.</a></p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_cathode_title">If you are conducting research related to the positive electrodes:</h4>
                            <p data-i18n-html="abs.c_cathode_text">We can produce positive electrodes according to the methods and/or key materials you provide, and then match negative electrodes, such as conventional zinc mental foil, zinc metal powder electrodes, zinc oxide powder electrodes, etc. We can also develop unconventional negative electrodes as you specify or provide key materials (which may cost a little more time for electrode development). Other components, such as electrolytes and separators, can be specified or provided by you, or we can match them ourselves according to your needs.</p>
                            <p class="click-link-line"><span data-i18n="abs.c_anode_info_prefix">Conventional Positive Electrodes:</span> <a href="#" class="info-link" data-modal="anode-info" data-i18n="abs.c_click">Click here.</a></p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_elec_title">If you are conducting research related to the electrolytes:</h4>
                            <p data-i18n="abs.c_elec_text">You can directly provide the special electrolytes, or we can prepare them according to the methods and/or materials you specify or provide. We can match the conventional positive and negative electrodes listed above, or develop unconventional electrodes as you specify or provide key materials (which may cost a little more time for electrode development).</p>
                        </div>

                        <div class="custom-block">
                            <h4 data-i18n="abs.c_other_title">If you are conducting research related to the separators or current collectors:</h4>
                            <p data-i18n-html="abs.c_other_text">You can directly provide the special materials that meet the dimensional requirements, and we can match the conventional positive and negative electrodes listed above, or we can develop unconventional electrodes as you specify or provide key materials (which may cost a little more time for electrode development).</p>
                            <p class="click-link-line"><span data-i18n="abs.c_sep_info_prefix">Conventional separators and collectors:</span> <a href="#" class="info-link" data-modal="separator-info" data-i18n="abs.c_click">Click here.</a></p>
                        </div>

                        <div class="custom-note">
                            <p data-i18n="abs.c_note">All key or auxiliary materials can be provided or specified by you, or provided autonomously by us. The whole customization duration includes information time, confirmation time for specific battery process, necessary waiting time for material preparation, additional development time for unconventional electrodes, battery manufacturing and testing time, etc. Generally, it will take 4~8 weeks (excluding holidays).</p>
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
                            <h3 data-i18n="contact.center_name">Center for Energy Storage (CES)</h3>
                            <p data-i18n="contact.univ">The University of Hong Kong</p>
                        </div>

                        <div class="contact-info-block">
                            <h4 data-i18n="contact.person_label">Contact Person</h4>
                            <p>Ms. Amy, F. Huang</p>
                        </div>

                        <div class="contact-info-block">
                            <h4 data-i18n="contact.email_label">Email</h4>
                            <p><a href="mailto:fhuang1@hku.hk">fhuang1@hku.hk</a></p>
                        </div>

                        <div class="contact-info-block">
                            <h4 data-i18n="contact.wechat_label">WeChat</h4>
                            <p>Amy_huang0111</p>
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
            <p data-i18n="footer.copy">&copy; 2026 Center for Energy Storage (CES), The University of Hong Kong. All rights reserved.</p>
        </div>
    </footer>

    <!-- Info Modal (Under Construction) -->
    <div class="info-modal-overlay" id="info-modal">
        <div class="info-modal">
            <button class="info-modal-close" id="info-modal-close">&times;</button>
            <div class="info-modal-body">
                <div class="uc-icon">&#128679;</div>
                <h3 data-i18n="modal.uc_title" id="info-modal-title">Under Construction</h3>
                <p data-i18n="modal.uc_text">This page is under construction. Please check back later.</p>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo time(); ?>"></script>
    <?php wp_footer(); ?>
</body>
</html>
