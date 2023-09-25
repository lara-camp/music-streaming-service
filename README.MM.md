# Soul

သင့်လိုအပ်ချက်အတွက် ဖန်တီးပေးမယ့် Online သီချင်း၀န်ဆောင်မှု

## Translations
- [English ](/README.md)

## Features

- သီချင်းနားထောင်နိုင်ခြင်း
- သီချင်း၊ Album၊ အဆိုတော်များဖြင့် ရှာဖွေနိုင်ခြင်း
- User/Artist များ အသစ်ထည့်နိုင်ခြင်း
- User/Artist level အဆင့်မြှင့်တင်နိုင်ခြင်း
- Playlist အသစ်များထည့်နိုင်ခြင်း
- Recently Songs Listလုပ်ထားပေးခြင်း
- Favorite Listပါရှိခြင်း
- ကိုယ်ပိုင် သီချင်းများတင်နိုင်ခြင်း
- ကိုယ်ပိုင် Albumလိုက်တင်နိုင်ခြင်း
- Artist Follow လုပ်နိုင်ခြင်း
- Comment ရေးနိုင်ခြင်း
- Rating ပေးနိုင်ခြင်း
- ဘာသာစကားချိန်းနိုင်ခြင်း
- Social Accများဖြင့် loginပြုလုပ်ခြင်း
- Dark Theme ဒီဇိုင်းချိန်းနိုင်ခြင်း

လိုအပ်ချက်များ
------
1. PHP min v.8.1
2. DB server (Recommended:MySQL)
3. [composer min v.2.6](https://getcomposer.org/)
4. [nodejs min v.16](https://nodejs.org/)
5. Please check other requirements of  [Laravel](https://laravel.com/) and [Inertia](https://inertiajs.com/)

## Building from Source

1. Source codeကို အောက် cmdဖြင့် downloadဆွဲပါ

```
git clone https://github.com/music-streaming-platform/soul.git
```
2. .env.local fileမှ .env file သို့ Copy ကူးပါ
4. MySQL new db တခုအသစ်ဆောက်ပြီး configuration ကို .envမှာ ထည့်ပါ
5. VS code Software ဖြင့် project ကိုဖွင့်ပြီး terminalမှာ ဒီ cmdကို run ပါ
```
composer install
```
```
php artisan serve
```

6. နောက် terminal တခုမှာ ဒီ cmd တွေ runပါ
```
npm install
```
```
npm run dev
```
