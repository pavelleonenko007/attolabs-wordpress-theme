(()=>{"use strict";class e{static isEmail(e){return/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e.value)}static isEmpty(e){return!e.value}static isChecked(e){return e.checked}}const t=t=>{const s=t.querySelectorAll("[required]");let o=!0;for(let t=0;t<s.length;t++){const n=s[t];"checkbox"!==n.type&&"radio"!==n.type?"email"!==n.type?e.isEmpty(n)&&(n.closest(".input-keeper")?.classList.add("input-keeper--error"),o=!1):!e.isEmpty(n)&&e.isEmail(n)||(n.closest(".input-keeper")?.classList.add("input-keeper--error"),o=!1):e.isChecked(n)||(n.closest(".input-keeper")?.classList.add("input-keeper--error"),o=!1)}return t.classList.toggle("form-error",!o),o};const s=()=>{const e=function(e){let t=document.cookie.match(new RegExp("(?:^|; )"+"terms-of-use".replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,"\\$1")+"=([^;]*)"));return t?decodeURIComponent(t[1]):void 0}();if(e&&"accept"===e)return;const t=document.querySelector('[data-element="cookie"]');if(!t)return;const s=t.querySelector('[data-button="accept"]');t.style.display="flex",s.onclick=e=>{e.preventDefault(),function(e,t,s={}){(s={path:"/",...s}).expires instanceof Date&&(s.expires=s.expires.toUTCString());let o=encodeURIComponent(e)+"="+encodeURIComponent(t);for(let e in s){o+="; "+e;let t=s[e];!0!==t&&(o+="="+t)}document.cookie=o}("terms-of-use","accept",{"max-age":172800}),t.style.display="none"}};class o{constructor(e){this.select=e,e?(this.select.style.display="none",this.value=this.select.value,this.options=Array.from(this.select.options),this.isOpen=!1,this.canBlur=!1,this.setupHTML(),this.setEvents(),console.log(this.options.filter((e=>e.selected)))):console.warn("Please provide select element as argument")}setupHTML(){const e=this.options.filter((e=>e.selected)),t=this.options.map((e=>{let t="custom-select__option custom-option";return e.selected&&(t+=" custom-option--selected"),`<li data-select="option" data-value="${e.value}" class="${t}">\n\t\t\t\t<span>${e.textContent}</span>\n\t\t\t</li>`})),s=`<div tabindex="0" class="custom-select" data-select="field">\n\t\t\t<div class="custom-select__head select-head">\n\t\t\t\t<span data-select="selected" class="select-head__selected">${e[0].textContent}</span>\n\t\t\t\t<svg data-select="icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none" class="custom-select__icon">\n\t\t\t\t\t<path d="M5 10L2 1L8 1L5 10Z" fill="#fff"/>\n\t\t\t\t</svg>\n\t\t\t</div>\n\t\t\t<ul class="custom-select__options" data-select="list">${t.join("")}</ul>\n\t\t</div>`;this.select.insertAdjacentHTML("afterend",s),this.customSelect=this.select.nextElementSibling,this.optionsList=this.customSelect.querySelector('[data-select="list"]'),this.customOptions=Array.from(this.optionsList.querySelectorAll('[data-select="option"]')),this.selectedOptionElement=this.customSelect.querySelector('[data-select="selected"]'),this.icon=this.customSelect.querySelector('[data-select="icon"]')}getSelectedCustomOptionIndex(){return this.customOptions.findIndex((e=>e.classList.contains("custom-option--selected")))}getFocusedCustomOptionIndex(){return this.customOptions.findIndex((e=>document.activeElement===e))}handleKeydown(e){if(console.log(e),27===e.keyCode)return e.preventDefault(),void this.close();if(38===e.keyCode&&(e.preventDefault(),this.focus(this.getFocusedCustomOptionIndex()-1)),40===e.keyCode&&(e.preventDefault(),this.focus(this.getFocusedCustomOptionIndex()+1)),32===e.keyCode||13===e.keyCode){e.preventDefault();const t=e.target.dataset.select;if("field"===t)return void(this.isOpen?this.close():this.open());if("option"===t){const t=e.target.dataset.value;return void this.selectValue(t)}}}handleClick(e){const t=e.target.closest("[data-select]");if(!t)return void this.close();const s=t.dataset.select;if("field"!==s&&"selected"!==s||(this.isOpen?this.close():this.open()),"option"===s){const t=e.target.dataset.value;this.selectValue(t)}}handleBlur(e){setTimeout((()=>{document.activeElement.closest(".custom-select")||this.close()}),10)}setEvents(){this.customSelect.addEventListener("keydown",this.handleKeydown.bind(this)),document.body.addEventListener("click",this.handleClick.bind(this)),this.customSelect.addEventListener("blur",this.handleBlur.bind(this)),this.customOptions.forEach((e=>e.addEventListener("blur",this.handleBlur.bind(this))))}open(){if(!this.isOpen)return this.customSelect.classList.add("custom-select--active"),this.customOptions.forEach((e=>{e.setAttribute("tabindex","0")})),this.customOptions[this.getSelectedCustomOptionIndex()].focus(),this.isOpen=!0,this}close(){if(this.isOpen)return this.customSelect.classList.remove("custom-select--active"),this.customOptions.forEach((e=>{e.removeAttribute("tabindex")})),this.isOpen=!1,this}focus(e){if(!this.isOpen)return;let t=e;e>=this.customOptions.length&&(t=0),e<0&&(t=this.customOptions.length-1),this.customOptions[t].focus()}selectValue(e=""){this.select.value=e,this.value=e;const t=this.options.find((t=>t.value===e));this.selectedOptionElement.textContent=t.textContent,this.customOptions.forEach((t=>{const s=t.dataset.value;t.classList.toggle("custom-option--selected",s===e)})),this.close()}getValue(){}}window.addEventListener("load",(()=>{s(),document.querySelectorAll('[data-field="select"]').forEach((e=>{new o(e)})),document.querySelectorAll("[required]").forEach((e=>{e.addEventListener("change",(t=>{const s=e.closest(".input-keeper");s&&(s.classList.remove("input-keeper--error"),e.closest("form")?.classList.remove("form-error"))}))})),document.querySelectorAll('input[type="file"]').forEach((e=>{e.addEventListener("change",(t=>{const s=0===e.files.length,o=e.closest(".input-keeper");if(!o)return;const n=o.querySelector('input[name="link"]');n&&(s?n.setAttribute("required",""):n.removeAttribute("required"))}))})),(()=>{const e=document.querySelectorAll('[data-form="slider"]'),s=async e=>{e.preventDefault();const s=e.target.closest("form"),o=s.querySelector('[type="submit"]'),n=o.value,i=s.parentNode.querySelector(".success-message"),c=s.parentNode.querySelector(".w-form-fail");if(o.value="Processing...",!t(s)){const e=s.querySelector(".input-keeper--error").closest(".w-slide"),t=Array.from(s.querySelectorAll(".w-slide")).indexOf(e),i=s.querySelectorAll(".w-slider-dot");return $(i[t]).trigger("click"),void(o.value=n)}const r=new FormData(s);try{const e=await fetch(ATTO.AJAX_URL,{method:"POST",body:r}),{data:t,success:o}=await e.json();if(!o)throw new Error(t.message);s.style.display="none",i.style.display="block"}catch(e){console.error(e),s.style.display="none",c.style.display="block"}finally{setTimeout((()=>{s.reset(),s.style.display=null,i.style.display=null,c.style.display=null,o.value=n}),3e3)}};e.forEach((e=>{e.addEventListener("submit",s),(e=>{const t=e.querySelectorAll(".form-slide"),s=new IntersectionObserver((e=>{e.forEach((e=>{if(e.isIntersecting){const t=$(e.target).closest(".form-slider");t.removeClass("first-slide"),t.removeClass("last-slide"),$(e.target).next().is(":last-child")?t.addClass("last-slide"):$(e.target).is(":first-child")&&t.addClass("first-slide")}}))}),{threshold:.1,margin:"0px"});t.forEach((e=>{s.observe(e)}))})(e)}))})(),(()=>{const e=document.getElementById("projects-filter-form");if(console.log(e),!e)return;const t=async t=>{t.preventDefault();const s=new FormData(e);let o=!0;(s.has("services[]")||s.has("industries[]"))&&(o=!1),e.classList.toggle("form--active",!o);try{const t=await fetch(ATTO.AJAX_URL,{method:"POST",body:s});if(!t.ok)throw new Error("Something goes wrong");const o=await t.json(),n=document.querySelector(".projects-container"),i=e.querySelector(".form-filters-container");console.log(o),n.innerHTML=o.data.projects,i.innerHTML=o.data["filter-form"],Webflow.destroy(),Webflow.ready(),Webflow.require("ix2").init(),document.dispatchEvent(new Event("readystatechange"))}catch(e){console.error(e)}};e.addEventListener("change",t),e.addEventListener("submit",t),e.addEventListener("reset",(async t=>{t.preventDefault(),e.reset(),e.querySelectorAll('[type="checkbox"]').forEach((e=>{e.checked=!1,e.removeAttribute("checked")})),setTimeout((()=>{e.dispatchEvent(new Event("change"))}),100)}))})(),(()=>{const e=document.querySelectorAll('[data-form="filter-positions"]'),t=async e=>{e.preventDefault();const t=e.target.closest("form"),s=t.getAttribute("id"),o=new FormData(t),n=document.querySelectorAll(`button[type="reset"][form="${s}"]`),i=document.querySelectorAll(`button[type="submit"][form="${s}"]`),c=Array.from(document.querySelectorAll(".jobs-item")),r=!o.has("department")&&!o.has("office")&&!o.has("employment_type");n.forEach((e=>e.classList.toggle("clear-filters--active",!r))),i.forEach((e=>{r?e.setAttribute("disabled",""):e.removeAttribute("disabled")})),"change"!==e.type&&(c.forEach((e=>{const{department:t,office:s,employment_type:n}=e.dataset,i=s.split(","),c=!o.has("department")||t===o.get("department"),r=!o.has("office")||i.includes(o.get("office")),l=!o.has("employment_type")||n===o.get("employment_type");e.style.display=c&&r&&l?"flex":"none"})),"job-filter-form-mobile"===s&&document.documentElement.classList.remove("filteropened"))},s=e=>{var t;const s=e.target.closest("form"),o=null!==(t=s.dataset.formTrigger)&&void 0!==t?t:"submit";s.reset(),setTimeout((()=>{s.dispatchEvent(new Event(o))}),100)};e.forEach((e=>{e.dataset.formTrigger,e.addEventListener("submit",t),e.addEventListener("change",t),e.addEventListener("reset",s)}))})(),(()=>{const e=document.querySelectorAll('[data-form="job-contact"]'),s=async e=>{e.preventDefault();const s=e.target.closest("form"),o=t(s),n=s.querySelector('[type="submit"]'),i=n.value;if(n.value="Processing...",!o)return void(n.value=i);const c=new FormData(s);try{const e=await fetch(ATTO.AJAX_URL,{method:"POST",body:c}),{data:t,success:s}=await e.json();if(!s)throw new Error(t.message);n.value=t.message}catch(e){console.error(e),n.value=e}finally{setTimeout((()=>{n.value=i}),3e3)}};e.forEach((e=>e.addEventListener("submit",s)))})(),document.querySelectorAll('[data-button="copy"]').forEach((e=>{e.addEventListener("click",(t=>{t.preventDefault();const s=e.querySelector("div:first-child"),o=s.textContent;navigator.clipboard.writeText(window.location.href).then((()=>{e.textContent="Copied to clipboard!",setTimeout((()=>{s.textContent=o}),300)}))}))}))}))})();