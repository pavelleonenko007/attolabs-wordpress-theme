<?php
/*
Template name: Atto-flow
*/
?>
    <!DOCTYPE html>
<html data-wf-page="65ae21eab8e90d9757d32ccb" data-wf-site="65ae21eab8e90d9757d32cc8">
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
			<div class="barba-container">
				<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
					<header class="header"><a href="/" aria-current="page" class="brand w-nav-brand w--current"><img src="<?php echo get_template_directory_uri() ?>/images/65e02d40c169cf7705bd3a4a_logo.svg" loading="lazy" alt class="logo"></a>
						<nav role="navigation" class="w-nav-menu"><a href="/projects" class="navlink w-nav-link">What we do</a><a href="/about" class="navlink w-nav-link">Who we are</a><a href="/work-with-us" class="navlink w-nav-link">Work with us</a><a href="/jobs" class="navlink w-nav-link">Jobs</a>
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
						<div class="div-block-13"><a href="/" aria-current="page" class="menu-link w--current">Home</a><a href="/projects" class="menu-link">What we do</a><a href="/about" class="menu-link">Who we are</a><a href="/work-with-us" class="menu-link">Work with us</a><a href="/jobs" class="menu-link">Jobs</a></div>
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
				<section data-w-id="55190ab3-513e-5d8f-8125-8044187d946c" class="section main-section main-page obsf ob1">
					<div data-w-id="79284580-e454-7642-0e1a-43be8a2c8342" class="main-bg">
						<div class="main-img-front">
							<div class="div-block-9 mainer">
								<div data-is-ix2-target="1" class="background-video" data-w-id="61920619-552a-3f7a-9b15-5aba781df4d0" data-animation-type="lottie" data-src="https://assets-global.website-files.com/65ae21eab8e90d9757d32cc8/65ead3ac887c200792c713b1_data-sq.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
							</div>
						</div>
						<div class="div-block">
							<div class="main-ings">
								<div class="main-img _1 tops">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="28193263-bdc0-1783-1df5-23f420b09fbb" data-animation-type="lottie" data-src="https://assets-global.website-files.com/65ae21eab8e90d9757d32cc8/65ead3ac887c200792c713b1_data-sq.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _2">
								<div class="main-img _2 bots">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="6a91be05-4171-5547-a51d-359cdf771640" data-animation-type="lottie" data-src="https://assets-global.website-files.com/65ae21eab8e90d9757d32cc8/65ead3ac887c200792c713b1_data-sq.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _3 tops">
								<div class="main-img _3 tops">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="5a479c53-0c88-1e12-732a-92366701d2e6" data-animation-type="lottie" data-src="https://assets-global.website-files.com/65ae21eab8e90d9757d32cc8/65ead3ac887c200792c713b1_data-sq.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _4">
								<div class="main-img _4 bots">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="f17304dd-c966-91a9-cc48-8f33dfdbd7bb" data-animation-type="lottie" data-src="https://assets-global.website-files.com/65ae21eab8e90d9757d32cc8/65ead3ac887c200792c713b1_data-sq.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container _100vh dfs">
						<h1 class="h1-main-page">ENGINEERS for new era</h1>
					</div>
				</section>
				<section class="section obsf ob2">
					<div class="container secnd">
						<h2 class="p-76-92">Our team strives for unparalleled quality and innovative solutions, ensuring that <span class="red">your project will be executed at the highest level, exceeding expectations and delivering enduring value.</span></h2>
						<div class="cats-scroller">
							<h3 class="h3">Services</h3>
							<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e6-57d32ccb" class="serv-core server">
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e7-57d32ccb" class="serv-item"><a id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e8-57d32ccb" href="#" class="serv-link">Custom Software Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:12</span></a><a id="w-node-_1223488a-8650-1ebc-1d48-71d2a33c8c8d-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:2</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0ee-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0f7-57d32ccb" class="serv-item"><a id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0f8-57d32ccb" href="#" class="serv-link">CRM Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:1</span></a><a id="w-node-_96eef098-5e33-79b5-1ee5-4794d4d3037a-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:8</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0fe-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0ff-57d32ccb" class="serv-item"><a href="#" class="serv-link">WEB Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:2</span></a><a id="w-node-bb195a6e-aa6f-222d-97af-d3e5d168fb54-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:1</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd106-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd10f-57d32ccb" class="serv-item"><a href="#" class="serv-link">Mobile App Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_3beab6e2-2827-e03f-eef7-d757888fa258-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd116-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-c94dc203-f598-60f8-dc35-b56df49ad4cf-57d32ccb" class="serv-item"><a href="#" class="serv-link">SaaS Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-c94dc203-f598-60f8-dc35-b56df49ad4d6-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-c94dc203-f598-60f8-dc35-b56df49ad4da-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-e7cb59e9-fb00-9169-2e9d-5a416189cd4a-57d32ccb" class="serv-item"><a href="#" class="serv-link">Cloud Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-e7cb59e9-fb00-9169-2e9d-5a416189cd51-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-e7cb59e9-fb00-9169-2e9d-5a416189cd55-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_1136a086-f7e4-6c5b-d712-a306a1851d11-57d32ccb" class="serv-item"><a href="#" class="serv-link">MVP Development</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_1136a086-f7e4-6c5b-d712-a306a1851d18-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_1136a086-f7e4-6c5b-d712-a306a1851d1c-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_1ca58393-a567-4fb7-536e-3bbf7de73470-57d32ccb" class="serv-item"><a href="#" class="serv-link">Cross-Platform Solutions</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_1ca58393-a567-4fb7-536e-3bbf7de73477-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_1ca58393-a567-4fb7-536e-3bbf7de7347b-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_6384c687-b58d-563d-c303-f8b58cd0ce11-57d32ccb" class="serv-item"><a href="#" class="serv-link">Database Management</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_6384c687-b58d-563d-c303-f8b58cd0ce18-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_6384c687-b58d-563d-c303-f8b58cd0ce1c-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_424f3112-5305-c617-2184-81e64085e9ba-57d32ccb" class="serv-item"><a href="#" class="serv-link">API Integration</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_424f3112-5305-c617-2184-81e64085e9c1-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_424f3112-5305-c617-2184-81e64085e9c5-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-c7f92c89-77fe-cc19-32c6-5dfff5c256dc-57d32ccb" class="serv-item"><a href="#" class="serv-link">Support & Maintenance</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-c7f92c89-77fe-cc19-32c6-5dfff5c256e3-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-c7f92c89-77fe-cc19-32c6-5dfff5c256e7-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_13d6a8d6-3cc5-9698-7018-188378f5006c-57d32ccb" class="serv-item"><a href="#" class="serv-link">Technology Consulting</a><a href="#" class="serv-projects">Industries<span class="serv-span">:3</span></a><a id="w-node-_13d6a8d6-3cc5-9698-7018-188378f50073-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_13d6a8d6-3cc5-9698-7018-188378f50077-57d32ccb" class="obs-link-tracker"></div>
								</div>
							</div>
						</div>
						<div class="cats-scroller">
							<h3 class="h3">Industries</h3>
							<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd11a-57d32ccb" class="serv-core">
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd11b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Agritech</a><a href="#" class="serv-projects">Services<span class="serv-span">:1</span></a><a id="w-node-_6ac1f909-6525-b9ed-30fd-a9774858d522-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:7</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd122-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd123-57d32ccb" class="serv-item"><a href="#" class="serv-link">Consulting</a><a href="#" class="serv-projects">Services<span class="serv-span">:9</span></a><a id="w-node-_7dbf5198-894d-2a05-edb6-6ba9a40c24f2-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:5</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd12a-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd12b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Education</a><a href="#" class="serv-projects">Services<span class="serv-span">:3</span></a><a id="w-node-f6166b46-040b-5761-e2f5-e072aa890d51-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:22</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd132-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd133-57d32ccb" class="serv-item"><a href="#" class="serv-link">Energy</a><a href="#" class="serv-projects">Services<span class="serv-span">:5</span></a><a id="w-node-_2c9f6583-4582-6283-01cb-e04a45cf288b-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:74</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd13a-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd13b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Finance</a><a href="#" class="serv-projects">Services<span class="serv-span">:12</span></a><a id="w-node-b13e12b8-8a04-0824-9d36-4c481aebf9eb-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:2</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd142-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd143-57d32ccb" class="serv-item"><a href="#" class="serv-link">Fintech</a><a href="#" class="serv-projects">Services<span class="serv-span">:2</span></a><a id="w-node-_34ac5a0c-223d-b692-b25c-ac54a11c3877-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:41</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd14a-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd14b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Healthcare</a><a href="#" class="serv-projects">Services<span class="serv-span">:4</span></a><a id="w-node-_2e4c4617-6613-fa98-7094-e948d9074ca7-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:5</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd152-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd153-57d32ccb" class="serv-item"><a href="#" class="serv-link">Logistic</a><a href="#" class="serv-projects">Services<span class="serv-span">:10</span></a><a id="w-node-b51e91d8-d23b-35cd-3e54-5007b13bf88d-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:13</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd15a-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd15b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Non-profit organization</a><a href="#" class="serv-projects">Services<span class="serv-span">:9</span></a><a id="w-node-a991940a-0e10-a36c-2b51-f41ba2d30a03-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:4</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd162-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd163-57d32ccb" class="serv-item"><a href="#" class="serv-link">Retail and E-commerce</a><a href="#" class="serv-projects">Services<span class="serv-span">:4</span></a><a id="w-node-_1882a52a-1a71-d024-8ae4-0af00187df18-57d32ccb" href="/projects" class="serv-projects ll">View Projects<span class="serv-span">:32</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd16a-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd16b-57d32ccb" class="serv-item"><a href="#" class="serv-link">Travel and Tourism</a><a href="#" class="serv-projects">Services<span class="serv-span">:2</span></a><a id="w-node-fc342b4b-e65d-a910-ab01-1ba736ebefc3-57d32ccb" href="#" class="serv-projects ll">View Projects<span class="serv-span">:18</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd172-57d32ccb" class="obs-link-tracker"></div>
								</div>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd173-57d32ccb" class="serv-item"><a href="#" class="serv-link">EU Projects</a><a href="#" class="serv-projects">Services<span class="serv-span">:15</span></a><a id="w-node-_6658d68a-01a5-63a1-4ffd-213d3641f405-57d32ccb" href="#" class="serv-projects ll">View Projects<span class="serv-span">:3</span></a>
									<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd17a-57d32ccb" class="obs-link-tracker"></div>
								</div>
							</div>
						</div>
						<div class="closes">
							<div class="closes-1 _1">
								<div class="skyt-top"></div>
								<div class="obs-trigger"></div>
								<p class="paragraph-3 texts textsmom">0aD(SDA)3221XX(5)$A92-FSXZ$AAZX SDA$007ZXZZ1MS9DQEE(S)D-115SDAKOA($)SDA-771ALSDA12$MNZA!Q12-NVXA0(SI)XCAD221LDF-123!92$13$sdA1eq-(a17)att0-(lab$)</p>
							</div>
							<div class="closes-1 _2">
								<div class="skyt-top _3"></div>
								<div class="obs-trigger _3"></div>
								<p class="paragraph-3 texts textsmom">1FWQ3$1sdoreq9(1210)DASD/6SDAD01MS.S92$112&ASA99!SDASUYZQ24459FFQ8$J1$0-0S(A)S1124$s001DASDWQ-3$sdoreq(qww)31$asd)sdaa10wa.asda$1(33$)asda341sad0</p>
							</div>
							<div class="closes-1 _3">
								<div class="skyt-top _5"></div>
								<div class="obs-trigger _2"></div>
								<p class="paragraph-3 texts textsmom ds">pnmx(21-ab)mx.asaq1$aqvbczo083cvxp-uixc0012(ox)q1.xq-124olzda1-4$4bxq-(5.110)-a14b$bxbna10c(xxz)12dxmq-113.gxcxp11$011q0mz$6680axv.5sa(s-134)z-h-it</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section obsf ob3">
					<div class="projects-container">
						<div class="projects-trgger-mom">
							<div class="project-trigger"></div>
							<div class="project-trigger"></div>
							<div class="project-trigger"></div>
						</div>
						<div class="projects-mom">
							<div data-w-id="f1c5c006-3c57-2559-f82f-fba22142664a" class="abs-scroll-tracker"></div>
							<div class="skyk-projects">
								<div class="red-scroll-line"></div>
								<h2 class="h2-abs">Projects</h2>
								<div class="project-item active">
									<h3 class="h3-project">AMS</h3>
									<div class="project-item_top">
										<p class="p-18-120 mmax">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
										<div class="_0w">
											<div class="text-block">Industry:</div>
											<div class="text-block">Custom Software Development</div>
										</div><a href="/project-single" class="project-link">Learn more</a></div>
									<div class="project-img homep"><img src="<?php echo get_template_directory_uri() ?>/images/65e9d31bbc0384e115c2b4f8_image2022720(4).webp" loading="eager" alt class="img-cover pixel">
										<div class="canvas-tops">
											<div id="w-node-_4e48d67b-52a7-c2ef-6192-c0983d9ec77f-57d32ccb" class="blt"></div>
											<div id="w-node-f55d94d4-88be-9f33-1c0f-c8e6cbdb0daa-57d32ccb" class="blt"></div>
											<div id="w-node-df93d455-e93d-80d6-3089-b767cd0fe371-57d32ccb" class="blt"></div>
											<div id="w-node-_5699b9a3-02f3-8dce-3ae0-f022948d0a49-57d32ccb" class="blt"></div>
											<div id="w-node-_6dd76305-5e96-77aa-8055-8fde6863e2f6-57d32ccb" class="blt"></div>
											<div id="w-node-_1f7ed754-5441-c6d7-b0ed-d903124156b3-57d32ccb" class="blt"></div>
											<div id="w-node-_1a79a2b3-f6b8-b546-6312-7cdad39b8a6a-57d32ccb" class="blt"></div>
											<div id="w-node-_70882c66-a252-a720-8d7f-7efa91e949b6-57d32ccb" class="blt"></div>
											<div id="w-node-_28cc339f-9cb1-dc3d-3a74-84d1e0f23962-57d32ccb" class="blt"></div>
											<div id="w-node-dfb6c611-aac7-5738-34d0-fb6671814df8-57d32ccb" class="blt"></div>
											<div id="w-node-_3e93898e-183b-b7ef-711c-acc70efebce1-57d32ccb" class="blt"></div>
										</div>
									</div>
								</div>
								<div class="project-item">
									<h3 class="h3-project">UVP</h3>
									<div class="project-item_top">
										<p class="p-18-120 mmax">The modernization of the platform helped to speed up the search for documentation, the search for volunteers and the necessary data about them, in the database on the Unified Volunteer Platform for efficient and fast operation of the platform.</p>
										<div class="_0w">
											<div class="text-block">Industry:<br>Fintech</div>
										</div><a href="/project-single" class="project-link">Learn more</a></div>
									<div class="project-img _2 homep"><img src="<?php echo get_template_directory_uri() ?>/images/65ae36374e9b439983d212e7_image2022720(1).webp" loading="eager" alt class="img-cover pixel">
										<div class="canvas-tops">
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2c-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2d-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2e-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2f-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a30-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a31-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a32-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a33-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a34-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a35-57d32ccb" class="blt"></div>
											<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a36-57d32ccb" class="blt"></div>
										</div>
									</div>
								</div>
								<div class="project-item">
									<h3 class="h3-project">CSH</h3>
									<div class="project-item_top">
										<p class="p-18-120 mmax">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
										<div class="_0w">
											<div class="text-block">Industry:<br>Fintech</div>
										</div><a href="/project-single" class="project-link">Learn more</a></div>
									<div class="project-img _3 homep"><img src="<?php echo get_template_directory_uri() ?>/images/65e9d38498a521ef243a6cf9_image2022720(5).webp" loading="eager" alt class="img-cover pixel">
										<div class="canvas-tops">
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168439-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843a-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843b-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843c-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843d-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843e-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843f-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168440-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168441-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168442-57d32ccb" class="blt"></div>
											<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168443-57d32ccb" class="blt"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="div-block-4 obsf ob1">
					<div class="div-block-6"></div>
					<div class="stik-diver">
						<section class="section">
							<div class="container secnd">
								<div>
									<h2 id="lo" class="p-76-92"><span class="red"><strong class="bold-text">ATTOLABS is a global leader in IT consulting, prioritizing seamless optimization of clients' business processes. Our unwavering commitment to employee comfort and top-notch performance positions us as a key player in the high-tech industry.</strong></span></h2>
								</div>
								<div class="fw-div">
									<p class="paragraph p-18-120 styks">Hear directly from our team about their experiences at <span class="atto">AttoLabs</span></p>
									<div id="w-node-_334cdc74-10ec-548f-cf64-8ad297d50458-57d32ccb" class="citas">
										<div id="w-node-_3f682a01-b8c5-416c-5cb1-dbadb4d0a908-57d32ccb" class="cita">
											<div class="p-18-120 blk">Innovation at the Core</div>
											<div class="p-12-120 uper03">Sarah L.<br>Software Engineer</div>
											<div class="p-12-120">"AttoLabs is more than a workplace; it's a family of innovators. Collaborative culture, endless growth, and thrilling projects make every day exciting."</div>
										</div>
										<div id="w-node-_6396d677-9d56-e81f-a6e7-8d0e6c251c05-57d32ccb" class="cita">
											<div class="p-18-120 blk">Collaborative Culture</div>
											<div class="p-12-120 uper03">Sarah L.<br>Software Engineer</div>
											<div class="p-12-120">"AttoLabs is more than a workplace; it's a family of innovators. Collaborative culture, endless growth, and thrilling projects make every day exciting."</div>
										</div>
										<div id="w-node-_614817ac-503a-f692-3df3-c5f7b0d93e19-57d32ccb" class="cita">
											<div class="p-18-120 blk">Employee Well-being</div>
											<div class="p-12-120 uper03">Sarah L.<br>Software Engineer</div>
											<div class="p-12-120">"AttoLabs is more than a workplace; it's a family of innovators. Collaborative culture, endless growth, and thrilling projects make every day exciting."</div>
										</div>
										<div id="w-node-dd3b723c-f051-9f4a-8549-e6c3d7f2d63d-57d32ccb" class="cita">
											<div class="p-18-120 blk">Learning Opportunities</div>
											<div class="p-12-120 uper03">Sarah L.<br>Software Engineer</div>
											<div class="p-12-120">"AttoLabs is more than a workplace; it's a family of innovators. Collaborative culture, endless growth, and thrilling projects make every day exciting."</div>
										</div>
										<div id="w-node-_1b09e951-de97-a378-685f-3972b3f10238-57d32ccb" class="cita">
											<div class="p-18-120 blk">Global Impact</div>
											<div class="p-12-120 uper03">Sarah L.<br>Software Engineer</div>
											<div class="p-12-120">"AttoLabs is more than a workplace; it's a family of innovators. Collaborative culture, endless growth, and thrilling projects make every day exciting."</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="styker" class="div-block-3 obsf ob1">
					<div class="form-tracker"></div><a id="idid" href="#">Text Link</a></div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1 w-form">
							<form method="get" fs-formsubmit-element="form-1" name="email-form" data-name="Email Form" id="email-form" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="e712b2d4-cdc6-13d3-0be8-7d109bd42cb0">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="mask w-slider-mask">
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
							<form method="get" fs-formsubmit-element="form-2" name="email-form" data-name="Email Form" id="email-form2" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="62bf69a8-f603-3ce6-bde8-e72cf0aba4bd">
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
							<form method="get" fs-formsubmit-element="form-3" name="email-form" data-name="Email Form" id="email-form3" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="dfe4d803-9fa9-cd23-f971-78daedb7d0d2">
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
							<div class="tline ll"><a href="#" class="tlink main-tlink formpp">Empower the Future with Us</a><a href="#" class="tlink main-tlink formpp">share your vision</a><a href="#" class="tlink main-tlink formpp">Describe your project</a>
								<div class="div-block-2"></div><a href="/projects" class="tlink">All projects</a></div><a href="#" class="close-form w-inline-block"><div class="text-block-5">CLOSE</div></a></div>
					</div>
				</div>
				<footer class="footer">
					<div class="container foo-core">
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1c4-fce8b1c2" class="vert"><a href="/" aria-current="page" class="w-inline-block w--current"><img src="<?php echo get_template_directory_uri() ?>/images/65defa42e065c3584e54a6fb_AttoLabs_logo.png" loading="lazy" alt class="logo-foo"></a>
							<div class="menu-vert"><a href="/" aria-current="page" class="foo-link w--current">Home</a><a href="/projects" class="foo-link">What We Do</a><a href="/about" class="foo-link">Who We Are</a><a href="/work-with-us" class="foo-link">Work With Us</a><a href="/jobs" class="foo-link">Jobs</a></div>
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
