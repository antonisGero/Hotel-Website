# wda-Hotel-Website

Θέμα:  web εφαρμογή αναζήτησης καταλυμάτων.

Δομή:
1.	Οθόνη landing με search( inputs μόνο city, room type, check in date, check out date)
2.	Λίστα με δωμάτια + (φίλτρα)
3.	Οθόνη με το Δωμάτιο (περιγραφή δωματίου κτλ)
4.	Οθόνη με το Profile (favorite list, bookings, reviews)

Δεδομένα που θα δοθούν:
1.	Έτοιμο σχήμα στη βάση με data (ο πίνακας με τα στοιχεία του ξενοδοχείου) 
2.	Φάκελος με φωτογραφίες που θα χρειαστούν για την βάση δεδομένων στον πίνακα room, όπου κάθε φωτογραφία αντιστοιχεί σε ένα δωμάτιο.


Website Elements:
 
Section/ Requirement ID	

 Page Title	Requirement Definition
Page-1	Landing Page	Αρχική σελίδα όπου θα περιέχει μόνο κάποια από τα φίλτρα αναζήτησης για να ξεκινήσει ο χρήστης. 
Inputs available for search:
➔	City
➔	Room type
➔	Check-in Date
➔	Check-out Date
Page-2	Λίστα με τα καταλύματα	Με βάση την πρώτη αναζήτηση του χρήστη εδώ παρουσιάζουμε τα δεδομένα. Θα έχουμε μία λίστα με όλα τα καταλύματα που εκπληρούν την αναζήτηση του χρήστη και θα παρουσιάζουμε τις βασικές πληροφορίες του κάθε καταλύματος. Αυτές θα είναι φωτογραφία, όνομα, πόλη & τοποθεσία, τύπος δωματίου, count of guests, τιμή ανά βραδιά και μικρή περιγραφή. Επιπλέον θα υπάρχει η επιλογή για να δει περισσότερες πληροφορίες για το κατάλυμα ή να το προσθέσει στα αγαπημένα.
Εδώ θα μπορούν να πραγματοποιηθούν και άλλες αναζητήσεις με βάση τα φίλτρα που θα υπάρχουν στην αριστερή μεριά της σελίδας.
Τα φίλτρα θα είναι τα παρακάτω:
➔	By count of guests (checkboxes)
➔	By room type (checkboxes)
➔	By city (checkboxes)
➔	Price range(range)
➔	By Check-in Date and Check-out Date (calendar)
Page-3	Δωμάτιο(Property management)	Όταν ο χρήστης επιλέξει να δει κάποιο κατάλυμα, οδηγείται στη σελίδα του καταλύματος όπου προβάλλονται όλες οι απαραίτητες πληροφορίες του καταλύματος. Property details (Photo, Name, City, Area, Room Type, Count of guests, Price per night, Location (stigmap), Short Description, Long Description, Parking, Wifi, Pet friendly).
➔	Book now option
➔	Property features
➔	Add to Favorites
➔	Reviews.
➔	Map view
Page - 4	Προφίλ(User Profile)
 	Προφίλ του χρήστη που περιέχει τρεις λίστες:
➔	Favorite list.
➔	My bookings.
➔	Reviews

*Περιορισμοί: Δεν θα χρειαστεί να δημιουργήσετε κάποια login και register σελίδα. Στην βάση δεδομένων υπάρχει πίνακας με όνομα user που περιέχει ένα μόνον χρήστη, μέσω του οποίου θα γίνονται τα bookings, τα reviews κτλ.
