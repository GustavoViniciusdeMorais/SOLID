import sys

class StdClass(object):
    pass

'''
Encapsulation on a class level

Problem:
A class has more responsabilities that it should have.
'''
class WrongOrder(object):
    def __init__(self, items, country):
        self.items = items;
        self.country = country;
    
    def get_order_total(self):
        total = 0;

        for item in self.items:
            total += item.price * item.quantity;
    
        total += total * self.get_tax_rate();
        
        return total;

    def get_tax_rate(self):
        if self.country == 'US':
            return 0.07;
        elif self.country == 'BR':
            return 0.85;
        else:
            return 0;

'''
Solution:
Build a class to just calculate the tax rates.
'''
class TaxCalculator(object):
    def get_tax_rate(self, country):
        if country == 'US':
            return 0.07;
        elif country == 'BR':
            return 0.85;
        else:
            return 0;

class Order(object):
    def __init__(self, items, country):
        self.items = items;
        self.country = country;
    
    def get_order_total(self):
        total = 0;

        for item in self.items:
            total += item.price * item.quantity;

        tax_calc = TaxCalculator();
        total += total * tax_calc.get_tax_rate(self.country);
        
        return total;

try:
    country = sys.argv[1];
    
    item1 = StdClass();
    item1.price = 10;
    item1.quantity = 2;
    
    item2 = StdClass();
    item2.price = 8;
    item2.quantity = 3;
    
    items = [item1, item2];
    
    order = Order(items, country);
    result = order.get_order_total();

    print(result);
except Exception as e:
    print(e);