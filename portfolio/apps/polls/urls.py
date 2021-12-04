from django.urls import path, include
from . import views

app_name = 'polls'
urlpatterns = [
	path('', views.index, name="index"),
	path('eng/', views.english, name="english"),
]
handler404 = "polls.views.handler404"
handler505 = "polls.views.handler505"