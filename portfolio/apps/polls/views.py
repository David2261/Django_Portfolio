from django.shortcuts import render, redirect
from django.template import RequestContext
from django.http import Http404, HttpResponseRedirect, HttpResponse
from django.urls import reverse_lazy
from django.core.mail import send_mail
from django.views.generic import CreateView
from .forms import ContactForm


# Ошибка 404
def handler404(request, exception, template_name="404.html"):
    response = render(template_name)
    response.status_code = 404
    return response

# Ошибка 500
def handler505(request, *args, **kwargs):
    return render(request, '500.html', status=505)

# Русская версия сайта
def index(request):
    if request.method == 'POST':
        form = ContactForm(request.POST)
        if form.is_valid():
            subject = "Website Portfolio" 
            body = {
            'name': form.cleaned_data['name'],
            'email': form.cleaned_data['email'],
            'message':form.cleaned_data['message'],
            }

            # Функция отправки сообщения
            message = "\n".join(body.values())

            try:
                send_mail(subject, message, 'bulatnasirov2003@gmail.com', ['admiralgeneral2003@gmail.com']) 
            except BadHeaderError:
                return HttpResponse('Invalid header found.')
            return HttpResponse('Письмо отправлено!')

    form = ContactForm()
    return render(request, "index.html", {'form':form})


# Английская версия сайта
def english(request):
    return render(request, "index_eng.html")

# Контактная форма по отправке сообщений на почту
    

   