<style>
.header_dls_1_0_0{position:fixed;top:0;left:0;width:100%;z-index:101;font-family:var(--primary-font);background:rgba(0,0,0,.8);border-bottom:1px solid #fff;height:88px}
.header_dls_1_0_0 .container{position:relative}
.header_dls_1_0_0__box{display:flex;align-items:center}
.header_dls_1_0_0__logo{margin:0;width:18vw}
.header_dls_1_0_0__logo img{display:block;width:100%;max-width:200px;height:auto}
.header_dls_1_0_0__list{flex:1;display:flex;list-style:none;margin:0;padding:0;align-items:center}
.header_dls_1_0_0__item{padding:0 2.2vw;position:relative}
.header_dls_1_0_0__link{font-size:16px;padding:30px 0;display:block;font-weight:600;cursor:pointer;color:#fff}
.header_dls_1_0_0__btn{padding:0;margin:0 0 0 10px;border:none;background:none;display:block;cursor:pointer;line-height:0}
.header_dls_1_0_0__dropdown{transition:all .2s linear;display:none;position:absolute;top:56px;left:0;width:100%;background:#111;box-shadow:0 0 2px rgba(0,0,0,.2);padding:20px;text-align:center}
.header_dls_1_0_0__dropdown ul{list-style:none;padding:0;margin:0;font-size:12px}
.header_dls_1_0_0__dropdown ul li{padding-bottom:8px;margin-bottom:7px}
.header_dls_1_0_0__dropdown ul li a{color:#c2c2c2}
.header_dls_1_0_0__item:hover{background:#111}
.header_dls_1_0_0__item:hover .header_dls_1_0_0__dropdown{display:block}
.header_dls_1_0_0__item:hover .header_dls_1_0_0__dropdown a:hover{color:#fff}
.header_dls_1_0_0__language{position:absolute;z-index:9;top:30px;right:0;background:#212529;border:none;color:#fff;border-radius:none;text-shadow:0 1px 0 rgba(0,0,0,.4);outline:none;overflow:unset!important;padding-left:22px}
.header_dls_1_0_0__language option{color:#fff;border-radius:4px;padding:2px 5px;box-shadow:0 0 10px 100px #111 inset}
.header_dls_1_0_0__language option:hover{box-shadow:0 0 10px 100px #333 inset}
.header_dls_1_0_0__language.en{background:url(<?php echo $path ?>images/en.png) 0 5px no-repeat}
.header_dls_1_0_0__language.vi{background:url(<?php echo $path ?>images/vi.png) 0 5px no-repeat}
.header_dls_1_0_0__nav{display:none}
.header_dls_1_0_0__logoMb{display:none}
.header_dls_1_0_0__btnGroup{display:none}
.header_dls_1_0_0__bg{display:none}
@media(max-width: 1200px) {
.header_dls_1_0_0{padding:10px 0}
.header_dls_1_0_0 .container{padding-left:0;padding-right:0}
.header_dls_1_0_0__bg{background:rgba(0,0,0,.5);position:fixed;left:0;bottom:0;top:0;width:100%;z-index:10}
.header_dls_1_0_0__nav{display:block;position:fixed}
.header_dls_1_0_0__nav img{display:block}
.header_dls_1_0_0__btnGroup{display:flex}
.header_dls_1_0_0__btnGroup a{border:1px solid #fff;width:35px;height:35px;display:inline-flex;justify-content:center;align-items:center;border-radius:50%;margin-right:5px}
.header_dls_1_0_0__btnGroup button{background:rgba(238,238,238,0);border:1px solid #fff;width:35px;height:35px;display:inline-flex;justify-content:center;align-items:center;border-radius:50%;cursor:pointer}
.header_dls_1_0_0__link{padding:10px 0 10px 15px;background:#222}
.header_dls_1_0_0__logo img{margin:0 auto}
.header_dls_1_0_0__logoMb{display:block}
.header_dls_1_0_0__logoMb img{width:70%;margin:40px 17px 38px;display:block;height:auto}
.header_dls_1_0_0__list{flex-direction:column;overflow-y:auto;position:fixed;top:0;left:0;bottom:0;background:#151515;width:250px;z-index:20;transform:translateX(-100%);transition:all .3s linear}
.header_dls_1_0_0 .show{transform:translateX(0)}
.header_dls_1_0_0__item{width:100%;padding:1px 0}
.header_dls_1_0_0__btn{display:none}
.header_dls_1_0_0__item.open .header_dls_1_0_0__dropdown{display:block}
.header_dls_1_0_0__dropdown{width:100%;display:none;position:unset;padding:0 0 0 30px;box-shadow:unset;border:none;margin:10px 0 0;border-radius:0;text-align:left}
.header_dls_1_0_0__dropdownCate{width:100%;padding:10px 0 10px 15px;margin:0}
}
@media(max-width: 1180px) {
.header_dls_1_0_0{height:68px;display:flex;align-items:center}
.header_dls_1_0_0__logo{width:100%}
.header_dls_1_0_0__language{top:10px;font-size:15px}
.header_dls_1_0_0__logoMb img{margin:30px 17px}
}
@media(max-width: 820px) {
.header_dls_1_0_0__language.en{background:none;padding-left:0}
.header_dls_1_0_0__language{font-size:12px;top:14px}
.header_dls_1_0_0 .container{padding-right:15px;padding-left:15px}
}
@media(max-width: 600px) {
.header_dls_1_0_0__language.vi,.header_dls_1_0_0__language.en{background:none}
.header_dls_1_0_0__logo img{max-width:170px}
}
@media(max-width: 280px) {
.header_dls_1_0_0__logo img{max-width:122px}
.header_dls_1_0_0 .container{padding-right:10px;padding-left:10px}
.header_dls_1_0_0__list{width:230px}
.header_dls_1_0_0__language{top:5px}
}
</style>