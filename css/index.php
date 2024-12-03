<style>
    .header__session {
        display: flex;
        margin: auto;
        max-width: 1200px;
    }

    body {
        /* background-color: #ececec; */
    }

    .header__navbar,
    .header__login {
        display: flex;
        text-decoration: none;
        list-style: none;
        /* justify-content: space-around; */
    }

    .header__navebar__item {
        margin-right: 70px;
    }

    .header__navebar__item>a {
        text-decoration: none;
        color: black;
    }

    .logo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    .header__login__item>a {
        text-decoration: none;
        color: black;
        margin-right: 70px;
    }

    .header__navbar__session {
        display: flex;
        margin-left: 70px;
        margin-right: 70px;
        align-items: center;
    }

    .header__login__session {
        display: flex;
        align-items: center;
        margin-left: 100px;
        gap: 20px;
        justify-content: space-around;
    }

    .header__login__item {
        margin-right: 0px;
        text-align: right;
        right: 0;
    }

    .baner__session {
        height: 620px;
        background-image: url("./img/bac.png");
        background-size: cover;
        opacity: 90%;
    }

    .baner__text {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: whitesmoke;
        /* font-size: 30px; */
        text-align: center;
    }

    .infor__list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
    }

    .infor__item__number,
    .infor__title {
        color: #007e85;
        margin-top: 50px;
    }

    .services__list {
        margin-top: 70px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 50px;
    }

    .service__item {
        margin-top: 30px;
    }

    .card-img-top {
        object-fit: cover;
        width: 288px;
        border-radius: 30px;
    }
</style>