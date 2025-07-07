

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>My Website</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: MistyRose;
      text-align: center;
      padding-top: 100px;
      margin: 0;
      min-height: 100vh;
    }

    h1 {
      color: #5F9EA0;
      font-size: 2.0em;
      margin-bottom: 30px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }

    p {
      color: #696969;
      font-size: 1.0em;
      margin-bottom: 25px;
      line-height: 1.0;
    }

    .tech-btn {
      padding: 15px 30px;
      background: linear-gradient(135deg, #87CEEB 0%, #4682B4 100%);
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      margin-top: 20px;
      font-size: 1.1em;
      font-weight: bold;
      transition: all 0.4s;
      box-shadow: 0 4px 15px rgba(70, 130, 180, 0.3);
      position: relative;
      overflow: hidden;
    }

    .tech-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 7px 20px rgba(70, 130, 180, 0.4);
    }

    .tech-btn:active {
      transform: translateY(1px);
    }

    .tech-btn::after {
      content: "→";
      position: absolute;
      opacity: 0;
      right: -20px;
      transition: all 0.4s;
    }

    .tech-btn:hover::after {
      opacity: 1;
      right: 15px;
    }
  </style>
</head>
<body>
  <h1>حلول تقنية متكاملة</h1>
<p>نحو مستقبل رقمي آمن وفعال لعملك</p>
 <button onclick="window.location.href='mywebsite.html'" class="tech-btn">اضغط هنا</button>

  <script>
   
    document.addEventListener('DOMContentLoaded', () => {
      const btn = document.querySelector('.tech-btn');
      setTimeout(() => {
        btn.style.transform = 'scale(1.05)';
        setTimeout(() => {
          btn.style.transform = 'scale(1)';
        }, 300);
      }, 500);
    });
  </script>
</body>
</html>