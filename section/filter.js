const categoryList = document.querySelector(".category-list");
const orderList = document.querySelector(".order-list");
const container = document.querySelector(".flex-container");
let selectedArray = products;
let orderOption = "name";
const fillContainer = (array) =>{
    container.innerHTML = '';
    array.map(item=>{
        container.innerHTML+=item;        
    });
   
}
const createItems =  (productArray)=>{
    let items = [];
    productArray.map(product => {
        let div = 
            `
            <div class = "flex-item">
                <div class = "face front"> 
                    <img src='${product.p_image}' alt= '${product.p_imageType}'  class = 'img-item'>
                    <h3> ${product.p_name} </h3>
                </div>
                <div class= "face back">
                    <h3>${product.p_name} </h3>
                    <h4>Categoría: ${product.p_category} </h4>
                    <p> ${product.p_description} </p>
                    <p class = "item-price"> Precio:  ${product.p_price}$ </p>
                </div>
            </div>
            `;
        items.push(div);
    });
    return items;
}




const selectArray = (option)=>{
    switch(option){
        case 'school':
            selectedArray = schoolProducts;
            break;
        case 'event':
            selectedArray =  eventProducts;
            break;
        case 'decoration':
            selectedArray =  decorationProducts;
            break;
        default:
            selectedArray =  products;
            break;
    }
    orderBy(orderOption);
}
categoryList.addEventListener('change', (e)=>{
    selectArray(e.target.value);
    fillContainer(createItems(selectedArray));
    
})

const orderBy = (option) =>{

    switch(option){
        case 'name':
            selectedArray.sort( (a,b) => {
                return a.p_name.localeCompare( b.p_name);
            });
            break;
        case 'price':
            selectedArray.sort( (a,b) => {
                return parseInt(a.p_price,10) - parseInt(b.p_price,10);
            } );
            
            break;
            
        default:
            case 'name':
            selectedArray.sort( (a,b) => {
                return a.p_name.localeCompare( b.p_name);
            });
            break;
    }
   
}

orderList.addEventListener('change', (event)=>{
    orderOption = event.target.value;
    orderBy(orderOption);
    fillContainer(createItems(selectedArray));
})


fillContainer(createItems(selectedArray));


