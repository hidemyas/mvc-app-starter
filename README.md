# PHP MVC Framework Projesi

Basit bir PHP MVC (Model-View-Controller) yapısı ile oluşturulmuş temel bir web projesi.

---

## 📋 Proje Açıklaması
Bu proje, PHP ile geliştirilmiş basit bir MVC framework yapısını içerir. Admin ve Panel modülleri ile temel bir web uygulaması kurulumunu örnekler. XAMPP ortamında çalışacak şekilde tasarlanmıştır.

---

## 🛠️ Özellikler
- MVC mimarisi ile modüler yapı
- Temel Controller, Model, View yönetimi
- Veritabanı bağlantısı için `Database.php` sınıfı
- Oturum yönetimi (`Session.php`)
- .htaccess ile URL yönlendirmeleri

---

## 🚀 Kurulum
1. **XAMPP** kurulu olduğundan emin olun.
2. Proje dosyalarını `xampp/htdocs/` klasörüne kopyalayın (veya klasör adını `your-project` olarak değiştirin).
3. Tarayıcıdan erişim için:  
   `http://localhost/your-project/`

---

## 📂 Dizin Yapısı
```plaintext
├── app/
│   ├── controllers/
│   │   ├── Admin.php
│   │   ├── Index.php
│   │   └── Panel.php
│   ├── models/
│   │   ├── Admin.Model.php
│   │   ├── Index.Model.php
│   │   └── Panel.Model.php
│   └── views/
│       ├── Admin/
│       └── Panel/
│           └── home_view.php
├── libs/
│   ├── Bootstrap.php    # Uygulama başlatıcı
│   ├── Controller.php   # Temel Controller sınıfı
│   ├── Database.php     # Veritabanı bağlantısı
│   ├── Model.php        # Temel Model sınıfı
│   └── Session.php      # Oturum yönetimi
├── public/              # CSS/JS/Resimler için
├── .htaccess            # URL yönlendirmeleri
└── index.php            # Giriş noktası