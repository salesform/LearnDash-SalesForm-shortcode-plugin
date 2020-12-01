# LearnDash-SalesForm-shortcode-plugin
Tudj lemondási linket és kártyacsere linket használni a WordPress oldaladban

---
# Működése

A [trid] és [token] shortcode-okat hozza létre a salesform learndash connector.php fájl által a WP user meta adatokba írt trid és token adatok kiolvasásával.

---

# Használata

A sp-content/mu-plugins mappába kell feltölten. Nem szabad könyvtárba rakni, de átnevezhető a fájl.

Fontos, hogy az ebben a mappában található pluginek:

mindig be vannak kapcsolva, nem tilthatók le "véletlenül",

ABC sorrendben, a normál pluginek előtt töltődnek be.
----
Hátrányok:

az itteni pluginek nem jelennek meg a frissítések között, kézzel - vagy saját megoldással - kell őket frissítenünk,
az activation hook-ok nem hajtódnak végre,
a WordPress csak az mu-plugins mappában közvetlenül megtalálható PHP fájlokat tölti be, az almappákban levőket nem.
