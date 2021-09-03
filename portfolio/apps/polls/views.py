from django.shortcuts import render, redirect


def index(request):
    return render(request, "index.html")

def english(request):
    return render(request, "index_eng.html")