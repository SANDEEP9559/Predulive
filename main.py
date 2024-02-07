class Rectangle:
    def __init__(self, length, width):
        self.length = length
        self.width = width

    def area(self):
        return self.length * self.width

# Creating objects of the Rectangle class
rect1 = Rectangle(5, 3)
rect2 = Rectangle(7, 2)

# Accessing object attributes and methods
print(f"Area of rect1: {rect1.area()}")  # Output: Area of rect1: 15
print(f"Area of rect2: {rect2.area()}")  # Output: Area of rect2: 14
