# Soul

An Open-Source Music Player Service for all your needs!

## Translations
- [Myanmar 🇲🇲](/README.MM.md)

## Features

- Listen Songs
- Song, Album, Artist and Playlist Search
- Create New User/Artist
- User/Artist upgrade
- Create Playlist
- Listening history record
- Favorite List
- Create New Songs/Albums
- Follow Artist
- Comments
- Rating
- Language Switch
- Social Login
- Dark mode On/Off

Requirements
------
1. PHP min v.8.1
2. DB server (Recommended:MySQL)
3. [composer min v.2.6](https://getcomposer.org/)
4. [nodejs min v.16](https://nodejs.org/)
5. Please check other requirements of  [Laravel](https://laravel.com/) and [Inertia](https://inertiajs.com/)

## Building from Source

1. Fetch latest source code from master branch.

```
git clone https://github.com/music-streaming-platform/soul.git
```
2. Please clone .env.local and copied file name change from .env.local to .env
3. Create a clean db table
4. Set database infos in the .env
5. Run in VS Code or other clients.
```
composer install
```
```
php artisan serve
```

6. In other terminal, Run in VS Code or other clients.
```
npm install
```
```
npm run dev
```
