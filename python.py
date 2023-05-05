import difflib
from difflib import SequenceMatcher

def my_function(*args, **kwargs):
    copy = Element('message').element.value
    real = Element('original').element.value
    similarity = SequenceMatcher(None,copy,real).ratio() * 100
    Element('output').element.value = "Your content is " + str(similarity) + " % similar !"

def my_function_2(*args, **kwargs):
    with open('uploads/text1.txt', 'r') as file1:
        text1 = file1.read()
    with open('uploads/text2.txt', 'r') as file2:
        text2 = file2.read()
    matcher = SequenceMatcher(None, text1, text2)
    Element('Output').element.value = "Your content is " + str(matcher.ratio() * 100) + " % similar !"
