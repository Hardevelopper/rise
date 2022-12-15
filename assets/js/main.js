let searchBtn = document.querySelector('.nav .search-btn');
    searchBtn.addEventListener('click', () =>{
        document.querySelector('.form-search').classList.toggle('active');
        document.querySelector('.nav .menu ul').classList.remove('active');

    });
let bars = document.querySelector('.nav .bars');
    bars.addEventListener('click', () =>{
        document.querySelector('.nav .menu ul').classList.toggle('active');
        document.querySelector('.form-search').classList.remove('active');
    });
window.onscroll = () =>{
    document.querySelector('.nav .menu ul').classList.remove('active');
    document.querySelector('.form-search').classList.remove('active');
}