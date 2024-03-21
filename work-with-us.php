<?php
/*
Template name: Work with us
*/
?>
    <!DOCTYPE html>
<html data-wf-page="65e6e12621e6c89c61412de6" data-wf-site="65ae21eab8e90d9757d32cc8">
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
						<nav role="navigation" class="w-nav-menu"><a href="/projects" class="navlink w-nav-link">What we do</a><a href="/about" class="navlink w-nav-link">Who we are</a><a href="/work-with-us" aria-current="page" class="navlink w-nav-link w--current">Work with us</a><a href="/jobs" class="navlink w-nav-link">Jobs</a>
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
						<div class="div-block-13"><a href="/" class="menu-link">Home</a><a href="/projects" class="menu-link">What we do</a><a href="/about" class="menu-link">Who we are</a><a href="/work-with-us" aria-current="page" class="menu-link w--current">Work with us</a><a href="/jobs" class="menu-link">Jobs</a></div>
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
				<section class="section">
					<div class="container wrk">
						<p class="p-76-92">Work with us to unlock new opportunities and drive growth</p>
						<div class="cont-container">
							<div id="w-node-_01c1a107-6e6e-255a-1f03-fc85be7fd5a1-61412de6" class="cont-item">
								<h2 class="h2 cont-line">Investor Relations Manager</h2>
								<div class="man-pover">
									<p class="p-76-92"><a href="#" class="scroll-link contr">Muhsinjon Muhamadjonov</a></p>
									<div class="project-img img-man wokpage"><img src="<?php echo get_template_directory_uri() ?>/images/65dd7af81c85fee7c34e4c1e_2nd.webp" loading="eager" alt class="img-cover pixel-pep">
										<div class="canvas-tops">
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c81-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c82-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c83-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c84-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c85-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c86-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c87-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c88-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c89-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c8a-61412de6" class="blt"></div>
											<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c8b-61412de6" class="blt"></div>
										</div>
									</div>
								</div>
								<p class="p-76-92"><a href="mailto:muhsinjon@attolabs.de?subject=Hello" class="scroll-link contr">muhsinjon@attolabs.de</a></p>
								<p class="p-76-92"><a href="tel:+992928386626" class="scroll-link contr pc-prevent">+992 92 8386626</a></p>
							</div>
							<div id="w-node-_29145046-aa8e-d61e-f3c7-4e490131be0c-61412de6" class="cont-item">
								<h2 class="h2 cont-line">Business Development Manager</h2>
								<div class="man-pover">
									<p class="p-76-92"><a href="#" class="scroll-link contr">Bakhtiyor Atokhojaev</a></p>
									<div class="project-img img-man wokpage"><img src="<?php echo get_template_directory_uri() ?>/images/65afa5a86238390707078634_GettyImages-906499516-5bc6570d46e0fb0026d6f1e0203.webp" loading="eager" alt class="img-cover pixel-pep">
										<div class="canvas-tops">
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251aa-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251ab-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251ac-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251ad-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251ae-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251af-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251b0-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251b1-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251b2-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251b3-61412de6" class="blt"></div>
											<div id="w-node-_7bd15a30-8d29-9ce7-78ec-6aaf2f1251b4-61412de6" class="blt"></div>
										</div>
									</div>
								</div>
								<p class="p-76-92"><a href="mailto:bakhat@attolabs.it?subject=Hello" class="scroll-link contr">bakhat@attolabs.it</a></p>
								<p class="p-76-92"><a href="tel:+4917666551181" class="scroll-link contr pc-prevent">+49 176 66551181</a></p>
							</div>
						</div>
					</div>
				</section>
				<?php get_footer(); ?>
