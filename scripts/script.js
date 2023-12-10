const catalogItems = [
    {
        id: '1',
        img: 'audi-rs-6.jpg',
        title: 'Audi RS6',
        price: 9
    },
    {
        id: '2',
        img: 'e63AMG.jpg',
        title: 'Mercedes-Benz e63AMG',
        price: 8
    },
    {
        id: '3',
        img: 'supra.jpg',
        title: 'Toyota Supra',
        price: 7
    },
    {
        id: '4',
        img: 'Tesla-Cybertruck.jpg',
        title: 'Tesla Cybertruck',
        price: 6
    },
    {
        id: '5',
        img: 'bmw-m5-competition.jpg',
        title: 'BMW M5 competition',
        price: 5
    },
    {
        id: '6',
        img: 'mercedes-maybach-2.jpg',
        title: 'Mercedes-Benz Maybach GLS',
        price: 4
    },
    {
        id: '7',
        img: 'Volkswagen_2016_Tiguan_497488.jpg',
        title: 'Volkswagen Tiguan',
        price: 3
    },
    {
        id: '8',
        img: 'Lexus-LX-600.jpg',
        title: 'Lexus LX 600',
        price: 2
    },
    {
        id: '9',
        img: 'audi-rs-6.jpg',
        title: 'Audi RS6',
        price: 1
    },
]

// let cardItem = ''
// let productContentBody = document.getElementById('product_content-body')

// catalogItems.forEach((data) => {
//     cardItem +=
//         `

//     <div class="product_content-card" id='${data.id}'>
//     <a href="#" class="product_content-link">
//     <img src="${'images/' + data.img}" alt="" class="product_content-img">
//     <span class="product_content-about">
//     <h3>${data.title}</h3>
//     <span class="price">${data.price}</span>
//     </span>
//     </a>
//     </div>

//     `
// })
// productContentBody.insertAdjacentHTML('afterbegin', cardItem)




// sort by price

function sortPriceUp() {
    catalogItems.sort((a, b) => {
        return parseFloat(a.price) - parseFloat(b.price)
    })
}

function sortPriceDown() {
    catalogItems.sort((a, b) => {
        return parseFloat(b.price) - parseFloat(a.price)
    })
}

function clickHandler() {
    let name = document.getElementById('name').value
    let email = document.getElementById('email').value
    alert(`Спасибо, ${name}, что выбрали наш сервис, на вашу почту ${email} будет отправленно письмо с подтверждением!`)
    location.href = "endPoint.html"
}

function subMail() {

    let name = document.getElementById('name').value
    let text = document.getElementById('message').value
    console.log(text)
    location.href = `mailto:vlad172348@gmail.com&body=${text}?subject=${name} спрашивает`

}

