# EndPortalFinder
A simple PHP script to find the End Portal in Minecraft using geometry

## How it works
When you throw an eye of ender, it flies over a straight line towards the end portal.
So, if you throw an eye at coordinates (x, z), and then another eye at coordinates (x+300, z), you will have two straight lines. If you then triangulate them, they will meet together at the portal location.

## How to use
Press F3 and throw an eye of ender. It will stay in the air for a while until it falls. Without moving, center your crosshair exactly on it once it reaches it's peak position. Now, without moving your mouse, save your location (x1, z1) and the first facing degree (d1) as in the screenshot below.
![Screenshot](https://i.imgur.com/nN5usJF.png)
(This screenshot is just an example; you need to aim exactly at the eye of ender)

Now, go about 200~300 blocks away from the place you threw the eye and throw another eye. Again, without moving, aim at it once it reaches it's peak position and save your new location (x2, z2) and the first facing degree (d2).

Now, with x1, z1, d1, x2, z2, d2 in hands, just call function "find(x1, z1, d1, x2, z2, d2)" with these parameters in this order.

## Example
You got:
```
x1 = -1000
z1 = 700
d1 = 8.2

x2 = -800
z2 = 700
d2 = 32.3
```
Then, calling the function
```php
echo find(-1000, 700, 8.2, -800, 700, 32.3);
```
It returns "X: -1059, Z: 1109.4", which is the approximate location of the end portal.

## Tips
1. The more blocks you walk between the two shots, the more accurate the calculus will be. But don't go to far away since it can load another portal. 200~300 blocks generally is enough.

2. Once you have thrown the first eye and saved the informations, turn 90º to the side and then walk. It will make a right triangle and will be more accurate this way too.

3. Since the eye have a chance of 80% of dropping as an item again, it is likely that you can find the portal with just one eye.

4. On the other hand, if you have more than two eyes, you can do the proccess more than one time to get more accurate locations.
(e.g., you get the x and z of the portal, then walks 200 blocks away, throw the eye of ender again and call the function. Then compare the results)
