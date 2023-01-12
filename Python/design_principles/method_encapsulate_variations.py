import sys

'''
Encapsulates What Varies in a Method

Problem:
A method has more than one responsability.
'''
class StdClass(object):
    pass

def wrong_get_order_total(order):
    total = 0;

    for item in order.items:
        total += item.price * item.quantity;
    
    if order.country == 'US':
        total += total * 0.07;
    elif order.country == 'BR':
        total += total * 0.85;
    
    return total;

'''
Solution:
Build a method to process just the country taxs.
'''
def get_order_total(order):
    total = 0;

    for item in order.items:
        total += item.price * item.quantity;
    
    total += total * get_tax_rate(order.country);
    
    return total;

def get_tax_rate(country):
    if country == 'US':
        return 0.07;
    elif country == 'BR':
        return 0.85;
    else:
        return 0;

try:
    country = sys.argv[1];
    
    item1 = StdClass();
    item1.price = 10;
    item1.quantity = 2;
    
    item2 = StdClass();
    item2.price = 8;
    item2.quantity = 3;
    
    items = [item1, item2];
    
    order = StdClass();
    order.country = country;
    order.items = items;
    result = get_order_total(order);

    print(result);
except Exception as e:
    print(e);