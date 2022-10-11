let items = [
    {
        name:'Seçkin İçecek Odası',
        url:'exe_drinks_cabinet.png',
        stok:2,
    },
    {
        name:'İtem',
        url:'url',
        stok:2,
    },
    {
        name:'İtem',
        url:'url',
        stok:2,
    }
]

items.forEach((item)=>{
    content = '<div class="item">'
    content +='<div class="itemName">'+ item.name +'</div>'
    content +='<div class="itemImg"><img src="'+item.url+'" alt="'+item.name+'"></div>'
    content +='<div class="itemStok">'+item.stok+'</div>'
    content +='</div>'
    document.querySelector(".items").innerHTML += content;
})