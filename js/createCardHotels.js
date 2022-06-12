import getHotelsData from "./service.js";

const createCardHotels = async () => {
    const cards = await getHotelsData();
    const cardsContainer = document.querySelector("#cards");
    cardsContainer.innerHTML = "";
    cards.forEach((card) => {
        let stars = "";
        for (let i = 0; card["hotel"]["stars"] > i; i++) {
            stars += `<img src="/teste-infotera/img/star.svg" alt="">`;
        }
        const cardElement = document.createElement("div");
        cardElement.classList.add("card");
        cardElement.innerHTML = `
        <div class="div-card">
            <div id="card-image">
                <p class="card-price">
                    R$ ${card.lowestPrice.amount}
                    <span>/noite</span</p>
            <div class="image" style="background-image: url(${card.hotel.image});"></div>
            </div>
            <div class="card-content">
                <h3>${card.hotel.name}</h3>
                    <div class="star-rate">
                    <div class="star">
                       ${stars} 
                       </div>
                        <button class="button-vermais"><a href="./detail.php?id=${card.id}">Ver mais</a></button>   
                    </div>
            </div>
        </div>
        `;
        cardsContainer.appendChild(cardElement);
    });
};

window.addEventListener("DOMContentLoaded", createCardHotels());
