from django.contrib import admin
from . import views

# Register your models here.
handler404 = "polls.views.handler404"
handler500 = "polls.views.handler500"