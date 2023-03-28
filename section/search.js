const searchBar = document.querySelector(".search-bar");
const showAll = document.querySelector(".show-more");
const searchButton = document.querySelector(".search-button");


const binarySearch = (array, element, start, end) =>{
    if(start > end) return false;
    let mid = Math.floor((start+end)/2);
    if(array[mid].p_name.replace(/\s+/g,'').toLowerCase() === element) return array[mid];

    if(array[mid].p_name.replace(/\s+/g,'').toLowerCase().localeCompare(element)){
        return binarySearch(array,element,start,mid-1);
    }else{
        return binarySearch(array,element,mid+1,end);
    }
}
showAll.addEventListener('click',event =>{
    container.classList.toggle("container-all");
    if(container.classList.contains("container-all")){
        showAll.textContent = "Ocultar";
    }else{
        showAll.textContent = "Ver todo";
    }
})

searchButton.addEventListener('click', event =>{
    let e = binarySearch(selectedArray, searchBar.value.replace(/\s+/g,'').toLowerCase(), 0,selectedArray.length-1);
    if(e){
        fillContainer(createItems([e]));
    }else{
        container.innerHTML = '<h3> NO SE ENCONTRÓ EL PRODUCTO </h3>';
    }
})



