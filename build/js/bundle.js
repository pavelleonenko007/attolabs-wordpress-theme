(()=>{"use strict";class e{static isEmail(e){return e.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)}static isEmpty(e){return!e.value}static isChecked(e){return e.checked}}const t=t=>{const r=t.querySelectorAll("[required]");let s=!0;for(let t=0;t<r.length;t++){const o=r[t];"checkbox"!==o.type&&"radio"!==o.type?"email"!==o.type?e.isEmpty(o)&&(o.closest(".input-keeper")?.classList.add("input-keeper--error"),s=!1):e.isEmpty(o)&&!e.isEmail(o)&&(o.closest(".input-keeper")?.classList.add("input-keeper--error"),s=!1):e.isChecked(o)||(o.closest(".input-keeper")?.classList.add("input-keeper--error"),s=!1)}return s};window.addEventListener("load",(()=>{document.querySelectorAll("[required]").forEach((e=>{e.addEventListener("change",(t=>{const r=e.closest(".input-keeper");r&&r.classList.remove("input-keeper--error")}))})),document.querySelectorAll('input[type="file"]').forEach((e=>{e.addEventListener("change",(t=>{const r=0===e.files.length,s=e.closest(".input-keeper");if(!s)return;const o=s.querySelector('input[name="link"]');o&&(r?o.setAttribute("required",""):o.removeAttribute("required"))}))})),(()=>{const e=document.querySelectorAll('[data-form="slider"]');console.log(e);const r=async e=>{e.preventDefault();const r=e.target.closest("form"),s=r.querySelector('[type="submit"]'),o=s.value,n=r.parentNode.querySelector(".success-message"),a=r.parentNode.querySelector(".w-form-fail");if(console.log({successMessageElement:n,failMessageElement:a}),s.value="Processing...",!t(r)){const e=r.querySelector(".input-keeper--error").closest(".w-slide"),t=Array.from(r.querySelectorAll(".w-slide")).indexOf(e),n=r.querySelectorAll(".w-slider-dot");return $(n[t]).trigger("click"),void(s.value=o)}const c=new FormData(r);try{const e=await fetch(ATTO.AJAX_URL,{method:"POST",body:c}),{data:t,success:s}=await e.json();if(console.log(t),!s)throw new Error(t.message);r.style.display="none",n.style.display="block"}catch(e){console.error(e),r.style.display="none",a.style.display="block"}finally{setTimeout((()=>{r.reset(),r.style.display=null,n.style.display=null,a.style.display=null,s.value=o}),3e3)}};e.forEach((e=>{e.addEventListener("submit",r)}))})(),(()=>{const e=document.getElementById("projects-filter-form");if(console.log(e),!e)return;const t=async t=>{t.preventDefault();const r=new FormData(e);let s=!0;(r.has("services[]")||r.has("industries[]"))&&(s=!1),e.classList.toggle("form--active",!s);try{const t=await fetch(ATTO.AJAX_URL,{method:"POST",body:r});if(!t.ok)throw new Error("Something goes wrong");const s=await t.json(),o=document.querySelector(".projects-container"),n=e.querySelector(".form-filters-container");console.log(s),o.innerHTML=s.data.projects,n.innerHTML=s.data["filter-form"],Webflow.destroy(),Webflow.ready(),Webflow.require("ix2").init(),document.dispatchEvent(new Event("readystatechange"))}catch(e){console.error(e)}};e.addEventListener("change",t),e.addEventListener("submit",t),e.addEventListener("reset",(async t=>{t.preventDefault(),e.reset(),e.querySelectorAll('[type="checkbox"]').forEach((e=>{e.checked=!1,e.removeAttribute("checked")})),setTimeout((()=>{e.dispatchEvent(new Event("change"))}),100)}))})(),(()=>{const e=document.querySelectorAll('[data-form="filter-positions"]'),t=async e=>{e.preventDefault();const t=e.target.closest("form"),r=new FormData(t),s=Array.from(document.querySelectorAll(".jobs-item")),o=t.querySelector('button[type="reset"]'),n=!r.has("department")&&!r.has("office")&&!r.has("schedule");s.forEach((e=>{const{department:t,office:s,schedule:o}=e.dataset,n=s.split(","),a=!r.has("department")||t===r.get("department"),c=!r.has("office")||n.includes(r.get("office")),l=!r.has("schedule")||o===r.get("schedule");e.style.display=a&&c&&l?"flex":"none"})),o.classList.toggle("clear-filters--active",!n)},r=e=>{var t;const r=e.target.closest("form"),s=null!==(t=r.dataset.formTrigger)&&void 0!==t?t:"submit";r.reset(),setTimeout((()=>{r.dispatchEvent(new Event(s))}),100)};e.forEach((e=>{var s;const o=null!==(s=e.dataset.formTrigger)&&void 0!==s?s:"submit";e.addEventListener(o,t),e.addEventListener("reset",r)}))})(),(()=>{const e=document.querySelectorAll('[data-form="job-contact"]'),r=async e=>{e.preventDefault();const r=e.target.closest("form"),s=t(r),o=r.querySelector('[type="submit"]'),n=o.value;if(o.value="Processing...",!s)return void(o.value=n);const a=new FormData(r);try{const e=await fetch(ATTO.AJAX_URL,{method:"POST",body:a}),{data:t,success:r}=await e.json();if(!r)throw new Error(t.message);o.value=t.message}catch(e){console.error(e),o.value=e}finally{setTimeout((()=>{o.value=n}),3e3)}};e.forEach((e=>e.addEventListener("submit",r)))})(),document.querySelectorAll('[data-button="copy"]').forEach((e=>{e.addEventListener("click",(t=>{t.preventDefault();const r=e.querySelector("div:first-child"),s=r.textContent;navigator.clipboard.writeText(window.location.href).then((()=>{e.textContent="Copied to clipboard!",setTimeout((()=>{r.textContent=s}),300)}))}))}))}))})();