<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f8ff;
}

#title{
    color: #007E85;
    margin-bottom: 50px;
}
#subheading{
    color: #007E85;
    

}

.blog-section {
    text-align: center;
    padding: 20px;
    
}

.blog-section h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

.blog-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.blog-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    overflow: hidden;
    text-align: left;
}
.blog-card:hover {
    transform: translateY(-10px); /* Đẩy blog lên khi hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Tăng độ đổ bóng */
    background-color: #007E85;

}


.blog-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.blog-content {
    padding: 15px;
}

.blog-category {
    font-size: 0.9rem;
    color: #555;
    display: block;
    margin-bottom: 10px;
}

.blog-card a {
    font-size: 1.2rem;
    color: #333;
    margin: 0 0 10px;
    text-decoration: none;
}

.blog-card p {
    font-size: 0.9rem;
    color: #777;
    margin: 0;
    margin-top: 10px;
}
.our-families {
    background-color: #f0f8ff;
    padding: 50px 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.text-content {
    margin-bottom: 40px;
}

.subheading {
    font-size: 0.9rem;
    color: #0078d7;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 10px;
}

h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

.text-content p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
}

.cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 220px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 15px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon img {
    width: 30px;
    height: 30px;
}

.card h2 {
    font-size: 1.5rem;
    color: #0078d7;
    margin: 10px 0;
}

.card p {
    font-size: 1rem;
    color: #555;
    margin: 0;
}
</style>