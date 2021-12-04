from django.test import TestCase


class URLTest(TestCase):

	# Проверяет отправляется ли статус 200 при открытии базовой страницы
	def test_index(self):
		response = self.client.get('/')
		self.assertEqual(response.status_code, 200)
	# Проверяет редирект на страницу 404 при ошибочной url
		response_ex = self.client.get('/some/')
		self.assertEqual(response_ex.status_code, 302)