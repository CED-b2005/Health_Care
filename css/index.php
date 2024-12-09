<style>
    .header__session {
        display: flex;
        justify-content: space-between;
        /* Đảm bảo các phần tử được căn đều */
        align-items: center;
        /* margin: 10px; */
        max-width: 1200px;
        /* padding: 20px; */
    }

    .header__navbar,
    .header__login {
        display: flex;
        list-style: none;
        align-items: center;
    }

    .header__navbar__item {
        margin-right: 60px;
        /* Giảm khoảng cách giữa các mục trong navbar */
    }

    .header__navbar__item>a {
        text-decoration: none;
        color: black;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s;
    }

    .header__navbar__item>a:hover {
        color:brown;
    }
    
    .logo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-left: 20px;
    }

    .nav-item {
        text-decoration: none;
        color: black;
        margin-right: 40px;
        font-size: 16px;
        font-weight: 500;
    }
    
    
    .header__navbar__session {
        display: flex;
        align-items: center;
        margin-left: 40px;
        gap: 20px;
    }

    .baner__session {
        height: 620px;
        background-image: url("./img/bac.png");
        background-size: cover;
        background-position: center;
        /* opacity: 0.5; */
        position: relative;
    }

    .baner__text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: whitesmoke;
        /* font-size: 36px; */
        /* font-weight: 600; */
        text-align: center;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        /* Thêm bóng đổ cho chữ */
    }

    .infor__list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        /* Tự động tạo các cột đều */
        gap: 20px;
        justify-content: center;
        margin-top: 50px;
    }

    .infor__item__number,
    .infor__title {
        color: #007e85;
        margin-top: 20px;
        font-size: 18px;
        font-weight: 600;
    }

    .infor__item__number {
        font-size: 24px;
        /* Tăng kích thước cho số */
        color: #005c57;
    }

    .services__list {
        margin-top: 70px;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        /* Sử dụng grid responsive */
        gap: 30px;
        justify-items: center;
        /* Căn giữa các mục */
    }

    .service__item {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: transform 0.3s ease-in-out;
        /* Hiệu ứng di chuyển nhẹ khi hover */
    }

    .service__item:hover {
        transform: translateY(-10px);
        /* Hiệu ứng nhấc lên khi hover */
    }

    .card-img-top {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
        height: 200px;
        /* Giới hạn chiều cao hình ảnh */
    }

    .card-title {
        color: #005c57;
        font-size: 16px;
        margin: 10px;
        padding: 0;
    }
    /* Meet our team member */

    h2 {
        text-align: center;
        margin: 20px 0;
        color:#005c57
    }

    p {
        text-align: center;
        color: #555;
        margin: 10px;
    }

    /* Team section */
    .team {
        padding: 40px 20px;
        background-color: #f8f9fa;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */

    }

    .team-card {    
        background-color: #fff;
        /* width: 90%; */
        margin: 0 20px 0 20px;
        padding: 0;
        border: 4px solid #005c57;
        border-radius: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;  
        /* margin-left: 20px; */
    }

    .team-card img {
        margin-top: 10px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .team-card h3 {
        margin: 10px 0px;
        color: #005c57;
    }

    /* Testimonials section */
    .testimonials {
        /* width: 90%; */
        padding: 20px 40px;
    }

    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .testimonial-card {
        /* background-color: #fff; */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 4px solid #005c57;
    }

    .testimonial-card p {
        color: #005c57;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */

    }

    /* Trusted companies section */
    .trusted-companies {
        padding: 40px 20px;
        background-color: #f8f9fa;
        text-align: center;
    }

    .companies-logos img {
        width: 100px;
        /* height: 100px; */
        margin: 10px;
        opacity: 60%;
    }

    /* Newsletter section */
    .newsletter {
        padding: 40px 20px;
        background-color: #007bff;
        color: #fff;
        text-align: center;
    }

    .newsletter form {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .newsletter input {
        padding: 10px;
        border-radius: 5px;
        border: none;
        width: 250px;
    }

    .newsletter button {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        background-color: #0056b3;
        color: #fff;
        cursor: pointer;
    }

    .newsletter button:hover {
        background-color: #003f88;
    }

    @media (max-width: 768px) {
        .header__session {
            flex-direction: column;
            /* Chuyển các phần tử thành cột trên màn hình nhỏ */
            text-align: center;
        }

        .header__login__session {
            flex-direction: column;
        }

        .services__list {
            grid-template-columns: 1fr 1fr;
            /* Giảm số cột trên màn hình nhỏ */
        }

        .service__item {
            width: 90%;
        }
    }
</style>