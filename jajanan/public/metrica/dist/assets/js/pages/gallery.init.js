var Shuffle=window.Shuffle;
class Demo{
    constructor(e){
        this.element=e,this.shuffle=new Shuffle(e,{
            itemSelector:".picture-item",sizer:e.querySelector(".my-sizer-element")
        }),
        this.addShuffleEventListeners(),
        this._activeFilters=[],
        this.addFilterButtons(),this.addSorting(),
        this.addSearchFilter()
    }
    addShuffleEventListeners(){
        this.shuffle.on(Shuffle.EventType.LAYOUT,e=>{
            console.log("layout. data:",e)
        }),
        this.shuffle.on(Shuffle.EventType.REMOVED,e=>{
            console.log("removed. data:",e)
        })
    }
    addFilterButtons(){
        var e=document.querySelector(".filter-options");if(e){const t=Array.from(e.children),r=this._handleFilterClick.bind(this);t.forEach(e=>{e.addEventListener("click",r,!1)})}}_handleFilterClick(e){const t=e.currentTarget;var e=t.classList.contains("active"),r=t.getAttribute("data-group");this._removeActiveClassFromChildren(t.parentNode);let i;i=e?(t.classList.remove("active"),Shuffle.ALL_ITEMS):(t.classList.add("active"),r),this.shuffle.filter(i)}_removeActiveClassFromChildren(e){const t=e["children"];for(let e=t.length-1;0<=e;e--)t[e].classList.remove("active")}addSorting(){const e=document.querySelector(".sort-options");e&&e.addEventListener("change",this._handleSortChange.bind(this))}_handleSortChange(t){const e=Array.from(t.currentTarget.children);e.forEach(e=>{e.querySelector("input").value===t.target.value?e.classList.add("active"):e.classList.remove("active")});var r=t.target["value"];let i={};"date-created"===r?i={reverse:!0,by:function(e){return e.getAttribute("data-created")}}:"title"===r&&(i={by:function(e){return e.getAttribute("data-title").toLowerCase()}}),this.shuffle.sort(i)}addSearchFilter(){const e=document.querySelector(".js-shuffle-search");e&&e.addEventListener("keyup",this._handleSearchKeyup.bind(this))}_handleSearchKeyup(e){const n=e.target.value.toLowerCase();this.shuffle.filter((e,t)=>{if(t.group!==Shuffle.ALL_ITEMS){const s=JSON.parse(e.getAttribute("data-groups"));if(!(-1!==s.indexOf(t.group)))return!1}const r=e.querySelector(".picture-item__title"),i=r.textContent.toLowerCase().trim();return-1!==i.indexOf(n)})}}document.addEventListener("DOMContentLoaded",()=>{window.demo=new Demo(document.getElementById("grid"))});const tobii=new Tobii;
