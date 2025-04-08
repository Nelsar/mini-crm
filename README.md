Создание задачи (POST /api/tasks)
• Обновление задачи (PUT /api/tasks/{id})
• Удаление задачи (DELETE /api/tasks/{id})
• Получение списĸа задач пользователя (GET /api/tasks)
• Фильтрация задач по статусу (GET /api/tasks?status=in_progress)

Аудентификация
 • Регистрация (POST /api/register)
 • Вход (POST /api/login)
 • Вход (GET /api/register)

 Наполенение базы тестовыми данными 
  php artisan db:seed
