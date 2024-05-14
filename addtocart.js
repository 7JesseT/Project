const product = [
    {
        id: 0,
        image: 'background.jpg',
        title:'Cake',
        price: 20000,
    },
    {
        id:1,
        image:'banner_3.jpg',
        title:'Omolet',
        price:26000,
    },
    {
        id:2,
        image:'banner_6.jpg',
        title:'Mixed',
        price:40000,
    },
    {
        id:3,
        image:'Beef_Samosa.png',
        title:'Beef Samosa',
        price:10000,
    }
];

// Remove the unnecessary Set, just map to the titles
const categories = product.map(item => item.title);

let i = 0;

document.getElementById('root').innerHTML = categories.map((item) => {
    var {image, title, price} = item;
    return (
        `<div class = 'box'>
            <div class='img-box'>
                <img class='images' src = ${image}></img>
            </div>
            <div class='bottom'>
                <p>${title}</p>  
                <h2>${price}.00</h2>
                <button onclick='addtocart(${i++})'>Add to Cart</button>
            </div>
        </div>`
    );
}).join('');
