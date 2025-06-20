<?php

include("invcode.php");
include_once("code/loginC.php");


$usuario = $_SESSION['email'];

if (isset($_SESSION['usuarios_cards'][$usuario])) {
    foreach ($_SESSION['usuarios_cards'][$usuario] as $card) {
        echo "<div class='card-container'>
                <a class='card'>
                    <img src='{$card['imagem']}' alt='' class='card-image'>
                    <div class='card-content'>
                        <h3 class='card-title'>{$card['nome']}</h3>
                    </div>
                </a>
            </div>";
    }
} else {
    echo "Nenhum card encontrado.";
}
?>

<style>

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.card-container a {
    text-decoration: none;
    color: inherit;
}

.card {
    width: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    background: white;
    border: none;
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
    text-decoration: none !important;
    color: inherit !important;
}

.card:nth-child(1) {
    animation-delay: 0.1s;
}

.card:nth-child(2) {
    animation-delay: 0.2s;
}

.card:nth-child(3) {
    animation-delay: 0.3s;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: var(--primary-color);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.3s ease;
}

.card:hover::after {
    transform: scaleX(1);
    transform-origin: left;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.card-image {
    width: 46%;
  height: 214px;
  object-fit: cover;
  margin-left: 79px;
  margin-top: 21px;
  }

  .card-image-sol {
    width: 58%;
    height: 211px;
    object-fit: cover;
    margin-left: 64px;
    margin-top: 28px;
  }

  .card-image-vento {
    width: 46%;
  height: 209px;
  object-fit: cover;
  margin-left: 79px;
  margin-top: 29px;
  }

  


.card-content {
    padding: 15px;
    width: 33,3%;
}

.card-title {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: var(--primary-color);
    font-weight: 700;
}

.card-description {
    color: var(--text-light);
    font-size: 0.9rem;
    line-height: 1.5;
    text-decoration: none;
}

</style>