<?php
/*
Template name: projects
*/
?>
    <!DOCTYPE html>
<html data-wf-page="65d843633dee84076acaaba9" data-wf-site="65ae21eab8e90d9757d32cc8">
	<?php get_template_part("header_block", ""); ?>
	<body class="body">
		<?php if(function_exists('get_field')) { echo get_field('body_code', 'option'); } ?>
		<div class="css w-embed">
			<style>
html{font-size:calc(100vw / 1600)}

@media screen and (max-width: 1280px) { 
 html{font-size:calc(100vw / 1280)}
}


@media screen and (max-width: 992px) { 
 html{font-size:calc(100vw / 695)}
}

@media screen and (max-width: 495px) { 
 html{font-size:calc(100vw / 375)}
}


::-webkit-scrollbar {
height:0;
width:0
}

::-webkit-scrollbar-track {
background:black
}

::-webkit-scrollbar-thumb {
background-color:#c1c1c1;
border-radius:0;
border:0 solid #c1c1c1
}


.taba{pointer-events:none}
.styk-form {bottom: calc(-100vh + 36rem)}

.adress-item_bottom *{
color: #292525;
font-size: 12rem;
line-height: 120%;
letter-spacing: 0.12rem;
text-decoration-line: none;
}

.lang-line.active .radio-button {background-color: var(--grey-black);}

.closes{}

.serv-item .serv-projects{opacity:0}
.serv-item.active .serv-projects{opacity:1}

.lang-sh{filter:invert(1)}

.obs-link-tracker{height:calc(100vh - 21rem)}

.active .img-addr{opacity:1}

.tlink.prt{width: calc(50vw - 1px);}

.serv-item:hover *{opacity:1; color:var(--red)}


.serv-item *{padding-top:8px;padding-bottom:8px}

.imger-mom{pointer-events:none}

.imger.active{opacity:1}

.whitespace:after{content:' '}

.blackmenu nav a {
    color: rgba(41, 37, 37, 1);   
}

.blackmenu .logo{filter:invert(1)}

.project-in_item:nth-child(6n+1) {
    
    grid-column-start: span 2 !important;
    grid-column-end: span 2 !important;
    display: flex;
    min-height:800rem;
}

.project-in_item:nth-child(6n+2) {
    
    grid-column-start: span 1 !important;
    grid-column-end: span 1 !important;
    display: flex;
    min-height:400rem;
 
}


.project-in_item:nth-child(6n+2) .prjr{
 font-size: 18rem;
 line-height: 120%;
 letter-spacing: 0;
 color:white;
}

.project-in_item:nth-child(6n+3) {
    
    grid-column-start: span 3 !important;
    grid-column-end: span 3 !important;
    display: flex;
    min-height:800rem;
}

.project-in_item:nth-child(6n+4) {
    
    grid-column-start: span 1 !important;
    grid-column-end: span 1 !important;
    display: flex;
    min-height:400rem;
}

.project-in_item:nth-child(6n+4) .prjr{
 font-size: 18rem;
 line-height: 120%;
 letter-spacing: 0;
 color:white;
}

.project-in_item:nth-child(6n+5) {
    
    grid-column-start: span 2 !important;
    grid-column-end: span 2 !important;
    display: flex;
    min-height:800rem;
}

.project-in_item:nth-child(6n+6) {
    
    grid-column-start: span 3 !important;
    grid-column-end: span 3 !important;
    display: flex;
    min-height:800rem;
}

.project-in_item:nth-child(6n+2) *,
.project-in_item:nth-child(6n+4) *,
.project-in_item:nth-child(6n+3) img + * *,
.project-in_item:nth-child(6n+6) img + * *
{color:white}

.project-in_item:nth-child(6n+3) .p-76-92.prjr,
.project-in_item:nth-child(6n+6) .p-76-92.prjr{width:50%;padding-left:10rem; margin-left:auto}


.project-in_item:nth-child(18n+2) {
    background:rgba(48, 119, 255, 1);
    
}

.project-in_item:nth-child(18n+4) {
    background:rgba(251, 77, 64, 1);
}

.project-in_item:nth-child(18n+8) {
    background:rgba(13, 170, 94, 1);
}

.project-in_item:nth-child(18n+10) {
    background:rgba(48, 119, 255, 1);
}

.project-in_item:nth-child(18n+14) {
    background:rgba(251, 77, 64, 1);
}

.project-in_item:nth-child(18n+16) {
    background:rgba(13, 170, 94, 1);
}

.cat-core *:after, .last-jbcol *:after, .jil *:after{content:', '}
.cat-core *:nth-last-child(1):after, .last-jbcol *:nth-last-child(1):after, .jil *:nth-last-child(1):after{content:''}

.droper-content:after{content:"";height:40px}

.rdb:hover .radio-button{background:#fb4d40}
.rdb:hover .radio-button-label{color:#fb4d40}



textarea {
  resize: none;
}

.project-img .img-cover {
    opacity: 0;
}

.img-addr .blt{background:white}

.form-ceeper, .close-form, .tline.ll {transition: all 300ms ease}

.form-ceeper.openforms{transform: translateY(calc(-100vh + 36rem))}

.openforms .close-form{opacity:1; display: flex}
.openforms .tline.ll{opacity:0}

.word {
    display: contents;
    float: left;
}

.word:after{content:" ";display:inline}



.uls-mom{ 
  counter-reset: count;
}
.uls {
  counter-increment: count;
}
.uls::before {
  content: counter(count, decimal) '.';
}

.project-img + .resoults .paragraph.p-18-120.styks.single-p{
    width: 50%;
    max-width: 50%;
    margin-right: 10rem;
}

.project-img + .resoults .resoultes-core{max-width: 671rem;
    grid-column-gap: 44rem;
    grid-row-gap: 44rem;
    display: grid;
    grid-template-columns: 1fr;
}

.project-img + .resoults .resoult{flex-direction: row;}
.project-img + .resoults .p-18-120.blk.resoult {
    max-width: 178rem;
    min-width: 178rem;
    margin-bottom: 0;
}

.w-form-formradioinput--inputType-custom.w--redirected-checked + * + *{color:white}

.l-arrow {
    width: calc(50% + 1px);
    }
@media screen and (max-width: 992px) { 

.taba{pointer-events:all}


.project-in_item:nth-child(6n+1),
.project-in_item:nth-child(6n+2),
.project-in_item:nth-child(6n+3),
.project-in_item:nth-child(6n+4),
.project-in_item:nth-child(6n+5),
.project-in_item:nth-child(6n+6){
    min-height:480rem;
}



.project-in_item:nth-child(6n+2) .prjr,.project-in_item:nth-child(6n+4) .prjr{
 font-size: 13rem;
 line-height: 16rem;
}

.blackmenu .dot-m {
    filter: invert(1);
}


.project-img.img-man.rel .img-cover {
    opacity: 1;
}

.project-img.img-man.rel canvas,.project-img.img-man.rel .canvas-tops {
      opacity: 0;
}

.project-in_item:nth-child(6n+3) .p-76-92.prjr, .project-in_item:nth-child(6n+6) .p-76-92.prjr{
    width: 100%;
    padding-left: 0rem;
    margin-left: auto;
}




}    

@media screen and (max-width: 495px) { 

.serv-item *{
    grid-area: span 1 / span 2 / span 1 / span 2;
    justify-self: stretch;
}

textarea {
    min-height: 120rem;
}

.form-ceeper.openforms {
    transform: translateY(calc(-100dvh + 36rem));
}

}
			
			</style>
		</div>
		<div class="wrapper">
			<div class="barba-container blackmenu">
				<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
					<header class="header"><a href="/" class="brand w-nav-brand"><img src="<?php echo get_template_directory_uri() ?>/images/65e02d40c169cf7705bd3a4a_logo.svg" loading="lazy" alt class="logo"></a>
						<nav role="navigation" class="w-nav-menu"><a href="/projects" aria-current="page" class="navlink w-nav-link w--current">What we do</a><a href="/about" class="navlink w-nav-link">Who we are</a><a href="/work-with-us" class="navlink w-nav-link">Work with us</a><a href="/jobs" class="navlink w-nav-link">Jobs</a>
							<div data-hover="false" data-delay="0" class="dropdown w-dropdown">
								<div class="navlink lang-drop w-dropdown-toggle">
									<div>ENG</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 lang-sh"></div>
								<nav class="dropdown-list w-dropdown-list"><a href="#" class="lang-line active w-inline-block"><div>English</div><div class="radio-button"></div></a><a href="#" class="lang-line w-inline-block"><div>German</div><div class="radio-button"></div></a><a href="#" class="lang-line w-inline-block"><div>Russian</div><div class="radio-button"></div></a></nav>
							</div>
						</nav>
						<div class="menu-b">
							<div class="dot-m _1"></div>
							<div class="dot-m _2"></div>
							<div class="dot-m _3"></div>
							<div class="dot-m _4"></div>
						</div><a href="#" class="close-menu">Close</a></header>
					<div class="menu-block">
						<div class="div-block-13"><a href="/" class="menu-link">Home</a><a href="/projects" aria-current="page" class="menu-link w--current">What we do</a><a href="/about" class="menu-link">Who we are</a><a href="/work-with-us" class="menu-link">Work with us</a><a href="/jobs" class="menu-link">Jobs</a></div>
						<div class="bottom-nav">
							<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188996-58975f82" class="adress-item">
								<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188997-58975f82" class="p-18-120 _222">Contacts</div>
								<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188999-58975f82" class="adress-item_bottom">
									<div id="w-node-eedec887-cf2f-9a27-6944-d976b618899a-58975f82">Schanzenstraße 41 51063 Köln, Germany</div>
									<div id="w-node-eedec887-cf2f-9a27-6944-d976b618899c-58975f82" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
									<div id="w-node-eedec887-cf2f-9a27-6944-d976b61889a1-58975f82">contact@attolabs.de</div>
								</div>
							</div>
							<div id="w-node-_6f0c7519-0018-f7f0-0117-8a8f518ee231-58975f82" class="vert"><a href="#" class="foo-link_2">Cookie settings</a><a href="#" class="foo-link_2">Privacy policy</a></div>
							<div id="w-node-_6d4226e5-071d-3179-c4da-f21becda97b7-58975f82" class="foo-text">Attolabs, 2024</div>
						</div>
					</div>
				</div>
				<div class="div-block-4 obsf ob1">
					<div class="div-block-6"></div>
					<div class="stik-diver ggh">
						<section class="section">
							<div class="container secnd top-op">
								<h1 class="p-76-92">Projects</h1>
								<div class="filter-block-mob">
									<div class="top-line"><a href="#" class="filter-switcher w-inline-block"><div>Filter</div><div class="filter-shevron _2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none"><path d="M5 10L2 1L8 1L5 10Z" fill="currentColor"></path></svg></div></a><a href="#" class="clear-filter">Clear filters</a></div>
									<div class="filters-block">
										<div class="w-form">
											<form id="email-form-4" name="email-form-4" data-name="Email Form 4" method="get" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="b89cf7ca-e2c6-3358-fec3-101568a42046">
												<div class="droper-filter">
													<div class="drpoter-block">
														<div class="p-12-120">Services (<span class="count">6</span>)</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 no-mob"></div>
													<div class="droper-content">
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-7"></div>
<input type="checkbox" id="checkbox-7" name="checkbox-7" data-name="Checkbox 7" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-7">Custom Software Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-2"></div>
<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-2">CRM Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-3"></div>
<input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-3">Web Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Mobile app Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Saas Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Cloud Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">MVP Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">CROSS-PLATFORM SOLUTIONS</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Database solutions</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">API integration</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Support and maintenance</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">TECHNOLOGY consulting</span></label></div>
												</div>
												<div class="droper-filter">
													<div class="drpoter-block">
														<div class="p-12-120">Industries (2)</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 no-mob"></div>
													<div class="droper-content">
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-5"></div>
<input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-5">Agritech</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-6"></div>
<input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-6">Consulting</span></label></div>
												</div>
											</form>
											<div class="w-form-done">
												<div>Thank you! Your submission has been received!</div>
											</div>
											<div class="w-form-fail">
												<div>Oops! Something went wrong while submitting the form.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="projects-core underfilter">
									<div id="w-node-c5c01e1f-c024-aead-da9b-91343324a92f-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_8182f6c4-2339-3e15-68b5-8a731a408370-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-a7899b66-142c-b989-1d48-9754ef927123-6acaaba9" class="left-project-grid">
												<div id="w-node-dd408b7a-dd6f-ad8b-fa82-672c9d44d3cf-6acaaba9" class="proj-grider">
													<div id="w-node-e407d121-5fbe-5aa4-a39d-054169da69c6-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_15176be6-73d8-a4c0-1da8-05e9d38b69df-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_884f48b3-1d22-2a59-99f8-f6983e71b51d-6acaaba9" class="proj-grider">
													<div id="w-node-_884f48b3-1d22-2a59-99f8-f6983e71b51e-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_610acba9-b9b2-3ddc-d76d-8fb50602ffcd-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_4ab92eb9-6414-8d5a-3d2f-852b9e2a42a0-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee5034-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee5036-6acaaba9" class="left-project-grid">
												<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee5037-6acaaba9" class="proj-grider">
													<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee5038-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee503a-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee503c-6acaaba9" class="proj-grider">
													<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee503d-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_769b91ad-ee0c-2e2a-b6dc-a27073ee503f-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing a diverse set of protocols, the system intelligently manages and monitors heating systems in residential spaces, considering both internal and external temperatures”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_9d7afb37-b7d3-3d7c-b4a9-b5a044845e26-6acaaba9" class="project-in_item"><img src="<?php echo get_template_directory_uri() ?>/images/65e9d557548876efb661190d_img-120(1).webp" loading="lazy" alt class="img-3">
										<div class="spleet-project">
											<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eaf-6acaaba9" class="p-18-120 project-block">Module for reflashing the device via USB with encryption and authentication</div>
											<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb1-6acaaba9" class="left-project-grid">
												<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb2-6acaaba9" class="proj-grider">
													<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb3-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb5-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb7-6acaaba9" class="proj-grider">
													<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eb8-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_466d1264-ee70-4fdc-65b3-1e3913ef6eba-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-d3e7323e-4f9c-831b-bb7e-409579f7e28b-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc18-6acaaba9" class="p-18-120 project-block">Module for reflashing the device via USB with encryption and authentication</div>
											<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc1a-6acaaba9" class="left-project-grid">
												<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc1b-6acaaba9" class="proj-grider">
													<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc1c-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc1e-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc20-6acaaba9" class="proj-grider">
													<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc21-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_160337ed-49a1-25ee-3c19-0636fc93cc23-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing a diverse set of protocols, the system intelligently manages and monitors heating systems in residential spaces, considering both internal and external temperatures”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_7c19a502-6a4f-5e14-e700-b753d35cbad3-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b63e-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b640-6acaaba9" class="left-project-grid">
												<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b641-6acaaba9" class="proj-grider">
													<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b642-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b644-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b646-6acaaba9" class="proj-grider">
													<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b647-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-eaedb188-d2fd-e9ec-8246-6cf36299b649-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_0d0d1f76-5224-91c1-d56a-eff613e9210c-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fdf-6acaaba9" class="p-18-120 project-block">Module for reflashing the device via USB with encryption and authentication</div>
											<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe1-6acaaba9" class="left-project-grid">
												<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe2-6acaaba9" class="proj-grider">
													<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe3-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe5-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe7-6acaaba9" class="proj-grider">
													<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fe8-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_28eade1a-cb03-0ffe-d076-579560934fea-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_8f056ae2-9b1d-5aec-ccdb-abf258fec3c5-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c73-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c75-6acaaba9" class="left-project-grid">
												<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c76-6acaaba9" class="proj-grider">
													<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c77-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c79-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c7b-6acaaba9" class="proj-grider">
													<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c7c-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-f6ed5351-1885-9ea5-021c-3b1cafe20c7e-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><img src="<?php echo get_template_directory_uri() ?>/images/65d856c6e0a5b614b410e87c_img2.jpg" loading="lazy" alt class="img-3"><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_3c8b01ef-06f8-26f1-4489-05f3802a198a-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b35c-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b35e-6acaaba9" class="left-project-grid">
												<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b35f-6acaaba9" class="proj-grider">
													<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b360-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b362-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b364-6acaaba9" class="proj-grider">
													<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b365-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_8519c60c-d01f-bdbe-b467-a55e5a43b367-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-f02f5859-2fce-56f1-9c30-89f2684a9611-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f89d-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f89f-6acaaba9" class="left-project-grid">
												<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a0-6acaaba9" class="proj-grider">
													<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a1-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a3-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a5-6acaaba9" class="proj-grider">
													<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a6-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-_18527cf1-8c0b-f876-d494-0c688300f8a8-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_9972135f-d7e2-4c9f-f55b-db05bc536aca-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f68-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f6a-6acaaba9" class="left-project-grid">
												<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f6b-6acaaba9" class="proj-grider">
													<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f6c-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f6e-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f70-6acaaba9" class="proj-grider">
													<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f71-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-a32781aa-b0b1-0e41-a7ee-3733f3313f73-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-cdd6939a-b692-8f13-a9c3-d70880c6d2aa-6acaaba9" class="project-in_item">
										<div class="spleet-project">
											<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a3228-6acaaba9" class="p-18-120 project-block">Street lighting control system</div>
											<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a322a-6acaaba9" class="left-project-grid">
												<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a322b-6acaaba9" class="proj-grider">
													<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a322c-6acaaba9" class="p-12-120 c-grey">Service</div>
													<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a322e-6acaaba9" class="p-12-120">Custom Software development</div>
												</div>
												<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a3230-6acaaba9" class="proj-grider">
													<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a3231-6acaaba9" class="p-12-120 c-grey">Industry</div>
													<div id="w-node-e7491c0c-90ce-3808-4681-3dd4413a3233-6acaaba9" class="cat-core">
														<div class="p-12-120">Education</div>
														<div class="p-12-120">Fintech</div>
													</div>
												</div>
											</div>
										</div>
										<div class="p-76-92 prjr">“Employing ESP32 modules for efficient and reliable streetlight control”</div><a href="/project-single" class="project-link-in w-inline-block"></a></div>
									<div id="w-node-_3d3e5ec1-5644-c6f4-9e30-c9ed9830b5c0-6acaaba9" class="styk-btm _1">
										<div class="form-block filter-projects w-form">
											<form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="form-2" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="6ddaff6a-b4e1-9242-a944-e6813b312421">
<input type="submit" data-wait="Please wait..." class="hide w-button" value="Submit">
												<div class="spleet">
													<div class="text-block-4">Filters</div><a href="#" class="link-2">Clear filters</a></div>
												<div class="droper-filter">
													<div class="drpoter-block">
														<div class="p-12-120">Services (<span class="count">6</span>)</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2"></div>
													<div class="droper-content">
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox"></div>
<input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox">Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-2"></div>
<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-2">Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-3"></div>
<input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-3">Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Development</span></label></div>
												</div>
												<div class="droper-filter">
													<div class="drpoter-block">
														<div class="p-12-120">Industries (2)</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2"></div>
													<div class="droper-content">
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-5"></div>
<input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-5">Development</span></label>
<label class="w-checkbox rdb"><div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-6"></div>
<input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-6">Development</span></label></div>
												</div>
											</form>
											<div class="w-form-done">
												<div>Thank you! Your submission has been received!</div>
											</div>
											<div class="w-form-fail">
												<div>Oops! Something went wrong while submitting the form.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div><a id="idid" href="#">Text Link</a></div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1 w-form">
							<form method="get" fs-formsubmit-element="form-1" name="email-form" data-name="Email Form" id="email-form" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f4eb">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Empower the Future with Us</div>
<textarea required autofocus="true" placeholder="tell us how we could help you to emprower the future?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required></div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit"></form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="styk-form-mom _2 w-form">
							<form method="get" fs-formsubmit-element="form-2" name="email-form" data-name="Email Form" id="email-form2" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f510">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">share your vision</div>
<textarea required autofocus="true" placeholder="How do you envision shaping the future with us?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required></div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit"></form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="styk-form-mom _3 w-form">
							<form method="get" fs-formsubmit-element="form-3" name="email-form" data-name="Email Form" id="email-form3" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f535">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Describe your project</div>
<textarea required autofocus="true" placeholder="What is special about what you’re doing?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required></div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
<input class="text-field w-input" autofocus="true" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required></div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit"></form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="top-stykert">
							<div class="tline ll"><a href="#" class="tlink main-tlink formpp">Empower the Future with Us</a>
								<div class="div-block-2"></div><a href="#" data-w-id="977730e5-b10b-94b8-fdb5-049f4c68f562" style="width:0%" class="tlink show-filters">filters</a></div><a href="#" class="close-form w-inline-block"><div class="text-block-5">CLOSE</div></a></div>
					</div>
				</div>
				<footer class="footer">
					<div class="container foo-core">
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1c4-fce8b1c2" class="vert"><a href="/" class="w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/65defa42e065c3584e54a6fb_AttoLabs_logo.png" loading="lazy" alt class="logo-foo"></a>
							<div class="menu-vert"><a href="/" class="foo-link">Home</a><a href="/projects" aria-current="page" class="foo-link w--current">What We Do</a><a href="/about" class="foo-link">Who We Are</a><a href="/work-with-us" class="foo-link">Work With Us</a><a href="/jobs" class="foo-link">Jobs</a></div>
						</div>
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d2-fce8b1c2" class="aress-core">
							<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d3-fce8b1c2" class="adress-item">
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d4-fce8b1c2" class="p-18-120"><span class="atto">Switzerland</span></div>
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d7-fce8b1c2" class="adress-item_bottom">
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d8-fce8b1c2">Schanzenstraße 41 51063 Köln, Germany</div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1da-fce8b1c2" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1df-fce8b1c2">contact@attolabs.de</div>
								</div>
							</div>
							<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1e1-fce8b1c2" class="adress-item">
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1e2-fce8b1c2" class="p-18-120">Germany</div>
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1e4-fce8b1c2" class="adress-item_bottom">
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1e5-fce8b1c2">Schanzenstraße 41 51063 Köln, Germany</div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1e7-fce8b1c2" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1ec-fce8b1c2">contact@attolabs.de</div>
								</div>
							</div>
							<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1ee-fce8b1c2" class="adress-item">
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1ef-fce8b1c2" class="p-18-120">Türkiye</div>
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1f1-fce8b1c2" class="adress-item_bottom">
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1f2-fce8b1c2">Schanzenstraße 41 51063 Köln, Germany</div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1f4-fce8b1c2" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1f9-fce8b1c2">contact@attolabs.de</div>
								</div>
							</div>
							<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1fb-fce8b1c2" class="adress-item">
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1fc-fce8b1c2" class="p-18-120">Tojikiston</div>
								<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1fe-fce8b1c2" class="adress-item_bottom">
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1ff-fce8b1c2">Schanzenstraße 41 51063 Köln, Germany</div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b201-fce8b1c2" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b206-fce8b1c2">contact@attolabs.de</div>
								</div>
							</div>
						</div>
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b208-fce8b1c2" class="vert"><a href="#" class="foo-link_2">Cookie settings</a><a href="#" class="foo-link_2">Privacy policy</a>
							<div class="foo-text _23">Attolabs, 2024</div>
						</div>
						<div id="w-node-fb29d952-ecc1-f9d0-1692-f48fbb5e21a0-fce8b1c2" class="vert foo-hirz"><a href="#" class="foo-link_2 soc-links">Linkedin</a><a href="#" class="foo-link_2 soc-links">Facebook</a><a href="#" class="foo-link_2 soc-links">Instagram</a><a href="#" class="foo-link_2 soc-links">X (Twitter)</a>
							<div data-hover="false" data-delay="0" class="dropdown foodrop w-dropdown">
								<div class="navlink lang-drop foo-frop w-dropdown-toggle">
									<div>ENG</div><img src="<?php echo get_template_directory_uri() ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 lang-sh"></div>
								<nav class="dropdown-list foo-drop w-dropdown-list"><a href="#" class="lang-line active w-inline-block"><div>English</div><div class="radio-button"></div></a><a href="#" class="lang-line w-inline-block"><div>German</div><div class="radio-button"></div></a><a href="#" class="lang-line w-inline-block"><div>Russian</div><div class="radio-button"></div></a></nav>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<!-- FOOTER CODE -->
		<?php get_template_part("footer_block", ""); ?>
	</body>
</html>
