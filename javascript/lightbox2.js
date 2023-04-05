const imagenes = document.querySelectorAll('.img-galeria')
const imageneslight = document.querySelector('.agregar-imagen')
const contenedorlight = document.querySelector('.imagen-light')
const menu1 = document.querySelector('.menu');
imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerimagen(imagen.getAttribute('src'))
    })
})
const aparecerimagen = (imagen)=>{
    imageneslight.src = imagen;
    contenedorlight.classList.toggle('show')
    imageneslight.classList.toggle('showimage')
    menu1.style.opacity= '0'
}
contenedorlight.addEventListener('click', (e)=>{
    if(e.target !== imageneslight){
        contenedorlight.classList.toggle('show')
        imageneslight.classList.toggle('showimage')
        menu1.style.opacity= '1'
    }
})