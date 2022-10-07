<?php

namespace Rdhoni\FakerPhp\Generate;

/**
 * Generate Data
 * • Full Name 
 * • User Name 
 * • Phone 
 * • Email
 * • Password
 * • and other
 */
class User
{
  public function wanita()
  {
    $list = array(
      "Aabidah", "Aathifah", "Abdiel", "Abidah", "Adara", "Adawiyah", "Adelia", "Adena", "Adira", "Adonia", "Adoria", "Adora", "Adrienne", "Adsila", "Afrah", "Aiko", "Aimee", "Ainiyah", "Alana", "Alanza", "Alifah", "Alina", "Aline", "Alisha", "Almasah", "Almeta", "Alvina", "Amabel", "Amada", "Amandla", "Amany", "Amany", "Ambrose",
      "Aminah", "Amira", "Amira", "Anevay", "Anisah", "Anisah", "Annora", "Anthea", "Anthea", "Antonite", "Anya", "Ardelle", "Ardelle", "Ardelle", "Ardith", "Areta", "Ariane", "Arij", "Ariti", "Armila", "Asahy", "Ascarya", "Athifa", "Audrey", "Aurelia", "Aurelia", "Austrin", "Avisa", "Awahita", "Ayana", "Azalia", "Azana", "Azhar",
      "Azighah", "Bahijah", "Bahirah", "Bariah", "Bashirah", "Basilia", "Basimah", "Basyirah", "Basyirah", "Belicia", "Belva", "Abinaya", "Adriani", "Airani", "Anandya", "Anantari", "Anjani", "Arkadewi", "Arsyana", "Aruna", "Ayudisa", "Bandiani", "Banurasmi", "Basagita", "Batari", "Bestari", "Bratarini", "Cahaya", "Calya",
      "Candramaya", "Citra", "Citta", "Cyntia", "Danastri", "Danurdara", "Dhatu", "Diajeng", "Dianti", "Diatmika", "Ditya", "Elok", "Erina", "Estiana", "Fajarina", "Gahyaka", "Gantari", "Gardara", "Garini", "Gayatri", "Gemani", "Ginanita", "Gyandra", "Haira", "Hanasta", "Harina", "Harini", "Harita", "Hasana", "Hasta", "Hasya",
      "Hayu", "Ika", "Ina", "Indah", "Indri", "Indriana", "Indriati", "Indriaya", "Istari", "Isthika", "Isty", "Iswari", "Jayanti", "Jenar", "Jumila", "Kahiyang", "Kamala", "Kana", "Kani", "Kanista", "Karmika", "Kartana", "Kasidya", "Kasyaira", "Kayshila", "Keinan", "Kencana", "Kesara", "Kesawa", "Keswari", "Kila", "Kinnas", "Kirana",
      "Lahita", "Laksita", "Laksmi", "Lalita", "Lanita", "Laras", "Lasmaya", "Lawana", "Laya", "Lelana", "Lestari", "Lestia", "Lika", "Limar", "Listia", "Lituhayu", "Locita", "Lova", "Lukita", "Lyan", "Macika", "Mada", "Madaharsa", "Madarsana", "Madya", "Mahadewi", "Maharani", "Mahawirya", "Maheswari", "Mahiswara", "Maktika", "Malya",
      "Manda", "Manika", "Margi", "Mataya", "Maulina", "Maya", "Mega", "Megananda", "Mirah", "Miratussany", "Mirtra", "Nadindra", "Naeswari", "Nala", "Nandina", "Nara", "Nararya", "Narasnama", "Nawa", "Nayaka", "Niddha", "Nidya", "Nila", "Nimitya", "Nindia", "Nindita", "Nindya", "Nirbana", "Nirbaya", "Nirbita", "Nirmala", "Nisaka",
      "Nisdharya", "Nismara", "Nohan", "Nurcelia", "Ojala", "Oswasa", "Padmasari", "Paradista", "Paramastri", "Parmadita", "Pawana", "Pirata", "Pradigta", "Pradnyana", "Pragiwaka", "Pramata", "Pramidita", "Pratista", "Priscanara", "Puri", "Puspa", "Radmila", "Rahmi", "Rajini", "Rananta", "Rani", "Ranti", "Ranupatma", "Rara", "Rasmi",
      "Ratih", "Ratimaya", "Ratri", "Ratu", "Rawika", "Reska", "Reswara", "Resyakila", "Retania", "Rumi", "Sada", "Sakka", "Saktika", "Sakya", "Samada", "Saraswati", "Sarira", "Sasi", "Sasmaya", "Satya", "Semi", "Sena", "Seta", "Shima", "Sila", "Sitaresmi", "Swasti", "Tantri", "Tarasari", "Tisna", "Tiwi", "Tyas", "Utami", "Utari", "Wasana",
      "Wasesa", "Waskita", "Widati", "Widhiani", "Widi", "Widia", "Widiwasa", "Widuri", "Wikasita", "Wiyana", "Wulan", "Wulandari", "Wuri", "Yatiwara", "Yatna", "Yetri", "Yulianti", "Yuni", "Auristela", "Aqilla", "Aurellia", "Anulika", "Ayudia", "Anindira", "Azkia", "Arabelle", "Adelia", "Adena", "Aileen", "Ayunindya", "Chalondra",
      "Clarissa", "Citrani", "Danita", "Davira", "Davina", "Deolinda", "Eri", "Embun", "Elina", "Elvina", "Freya", "Friska", "Fany", "Fredella", "Faranisa", "Fawnia", "Fidelya", "Grizelle", "Indira", "Iva", "Jovanka", "Jovita", "Kalila", "Kirania", "Kaila", "Khansa", "Kiyoko", "Keysa", "Kyra", "Mika", "Mayasari", "Maheswari", "Myesha",
      "Meisie", "Naura", "Nadine", "Ningrum", "Nuria", "Nesya", "Naila", "Nayara", "Nerissa", "Prameswari", "Pratibha", "Pandhita", "Prima", "Rosalind", "Ratnasari", "Ratnaduhita", "Sherly", "Sifabella", "Safira", "Sasikirana", "Sekar", "Zemira", "Zanna", "Zeline", "Zhafira", "Ulani", "Agatha", "Aznii", "Adia", "Rawnie", "Rahmatiani",
      "Arundati", "Fajri", "Annada", "Fathina", "Ardani", "Kamania", "Keisha", "Salsabila", "Elvarette", "Jasmeen", "Cintakirana", "Arkarna", "Salvia", "Dilarai", "Engrasia", "Hardiyani", "Bertin", "Putri", "Zahran", "Leilani", "Yara", "Azmi", "Shaliha", "Arundaya", "Aqila", "Camron", "Alison", "Afsari", "Amanta", "Humaniora", "Jacinda",
      "Arumingratri", "Callie", "Emery", "Wilda", "Annabel", "Lazuardi", "Fathinah", "Delmora", "Amalia", "Thihani", "Amelia", "Ramaniya", "Qatrunnanda", "Aster", "Ardiyanti", "Evelyn", "Sabella", "Salma", "Nadhmi", "Rheva", "Maiza", "Mahestri", "Anabel", "Ayu", "Ambrosia", "Asmara", "Almeta", "Ayunisari", "Tasanee", "Arista", "Harimurti",
      "Zahra", "Pramusita", "Dewi", "Abyasa", "Ardelia", "Cathilin", "Raunie", "Ruwaida", "Orlin", "Arisanti", "Mutaqqin", "Ariella", "Nisa", "Felisia", "Audi", "Wijayanti", "Zahida", "Akila", "Rofifah", "Zeny", "Sashikirana", "Kaitlyn", "Pramusitha", "Danakitri", "Kayana", "Griselda", "Damata", "Antarlina", "Aryanti", "Rahdian", "Warda",
      "Azizah", "Ratifa", "Khalisa", "Ardiani", "Zizi", "Ardhania", "Hakeem", "Awahita", "Aquina", "Lovelia", "Vinrie", "Zafarani", "Monifa", "Adore", "Audri", "Arka", "Aneesha", "Sharmila", "Damayanti", "Silawarti", "Kamila", "Aretina", "Rachmawati", "Azura", "Adistia", "Apsariani", "Gatawati", "Clarance", "Mahardika", "Budiani", "Syakira",
      "Inosensia", "Ventura", "Auli", "Lentera", "Ailis", "Catalina", "Natane", "Alwani", "Bianglala", "Kemuning", "Harika", "Agni", "Elvaretta", "Belisia", "Elektra", "Shafira", "Cleopatra", "Harmoni", "Winanti", "Cahyaningrum", "Faiqa", "Conchetta", "Candida", "Cahyadewi", "Heidi", "Candrakanti", "Chin", "Deshi", "Catarina", "Nalani",
      "Concordia", "Earlena", "Keely", "Tatyana", "Kichi", "Fayola", "Nadhifa", "Stefani", "Hilary", "Yocolyn", "Zeyba", "Anubhawa", "Aswangga", "Buluarti", "Anastasia", "Azkadina", "Perdana", "Wikan", "Cakrawati", "Dewani", "Caturangga", "Atmawati", "Calista", "Eleen", "Beryl", "Adonia", "Dominica", "Sophie", "Atmariani", "Cordelia", "Waty",
      "Ayuningtyas", "Darani", "Prabaswara", "Kalani", "Diamanta", "Danasura", "Devi", "Anindya", "Amabel", "Milena", "Daniswara", "Darapuspita", "Emeri", "Kaili", "Ermina", "Dasha", "Thalia", "Prasanti", "Leonora", "Artema", "Danela", "Fidela", "Aurelia", "Madhuri", "Delisia", "Doreolia", "Aretha", "Darlena", "Laksmiwati", "Aydan", "Sukma",
      "Olivia", "Dhafiyah", "Shalihah", "Damara", "Terentia", "Nadmi", "Dignita", "Darlita", "Zahidah", "Arienta", "Eldora", "Magenta", "Evelin", "Kalyani", "Vanita", "Gilenia", "Estefani", "Zerlina", "Elpida", "Wildania", "Gloria", "Talia", "Erasma", "Salvina", "Elora", "Ladya", "Janitra", "Sabrina", "Rayani", "Harsanti", "Bikrun", "Haura",
      "Valentine", "Virginia", "Sandika", "Wardani", "Aristawati", "Faustene", "Hardiyanti", "Vania", "Novia", "Modesta", "Evodia", "Edlyn", "Rosmalia", "Arsanti", "Kandarwati", "Fredelina", "Evarista", "Susila", "Melinda", "Maribel", "Lumina", "Dhesi", "Erma", "Belvina", "Fataniah", "Fahmida", "Audreymayna", "Larina", "Fidonia", "Alice",
      "Fazila", "Rafania", "Rafifa", "Pastika", "Azalia", "Padmarini", "Berly", "Fronia", "Alexandria", "Puspamaya", "Felorena", "Queisha", "Aimee", "Aini", "Fortuna", "Fidelma", "Florida", "Calandra", "Fiora", "Lathifa", "Melisenda", "Farensa", "Everlyn", "Benita", "Alisha", "Valtina", "Karisma", "Widyanata", "Taruna", "Barika", "Keola",
      "Ardiningrum", "Anindy", "Naisha", "Daryani", "Auliti", "Ambarwati", "Gangika", "Widyawati", "Abila", "Ghaliba", "Ghazwani", "Grahita", "Calestyn", "Gandawati", "Kamini", "Astutiningtyas", "Tesia", "Hanania", "Abelia", "Gandasuli", "Candraningtyas", "Adriyani", "Nagendra", "Thahir", "Haryani", "Husniya", "Saleha", "Haimona",
      "Hadiyanti", "Hipatia", "Hanjani", "Laurel", "Mercia", "Hayati", "Hanifa", "Ghaida", "Andini", "Humaira", "Harshita", "Hartini", "Huwaida", "Ratnadewati", "Haida", "Hasmawati", "Haryati", "Manarina", "Laurinda", "Harmonia", "Carrington", "Sevilin", "Callysta", "Callia", "Imelda", "Balqis", "Mandasari", "Nareswati", "Indurasmi",
      "Estiningtyas", "Isaura", "Imanina", "Istiqomah", "Renata", "Albertina", "Iswara", "Nitisara", "Adristi", "Ismenia", "Lauda", "Gemilang", "Jitaksara", "Aqilah", "Iswahyuni", "Jahina", "Jaida", "Mutmainah", "Kemala", "Ardini", "Hiranya", "Silmi", "Annisa", "Berlian", "Jelita", "Aslimah", "Callista", "Taruni", "Rasmini", "Isabella",
      "Casimira", "Thufaila", "Kusuma", "Philotra", "Ghazzani", "Mandalika", "Elyesia", "Ariani", "Diaphenia", "Sartika", "Afrin", "Nailatul", "Almeera", "Afsheen", "Aloysius", "Adriana", "Zahrah", "Adora", "Chavali", "Angela", "Brunella", "Rafa", "Adawiyah", "Afaf", "Azzahra", "Anindita", "Beril", "Aline", "Saralee", "Claretta", "Alana",
      "Bellvania", "Fitiya", "Blinda", "Valerie", "Alexandra", "Hara", "Nathania", "Nurfattah", "Cliantha", "Cempaka", "Talita", "Fathiyyaturahma", "Rini", "Faida", "Mahya", "Syahraini", "Alifa", "Farhana", "Mughny", "Ramadhani", "Atifa", "Gavaputri", "Adela", "Alicia", "Adara", "Unna", "Naiaraputri", "Tsabita", "Husna", "Annabella", "Adrien",
      "Corinna", "Khaira", "Afifah", "Adelina", "Keysha", "Annora", "Nur", "Farzana", "Dayita", "Amanda", "Intan", "Gaby", "Lucretia", "Alma", "Clarinta", "Rukma", "Curtina", "Florenza", "Kevyn", "Malika", "Hisana", "Ramadhina", "Althaf", "Engelberta", "Lintang", "Andromeda", "Priya", "Tiara", "Belia", "Ramania", "Faren", "Khairinniswa",
      "Parameswari", "Yalanda", "Cahya", "Acelin", "Annis", "Felicia", "Nabilah", "Faiha", "Rania", "Fernanda", "Dary", "Syua", "Urania", "Galena", "Flora", "Frederika", "Xandra", "Prissy", "Marjeta", "Saskia", "Agnibrata", "Trina", "Fatina", "Citranti", "Deva", "Aruni", "Rinjani", "Sachi", "Anantara", "Aryasuta", "Havika", "Sakhi", "Astami",
      "Lavina", "Deana", "Ardenia", "Prasiya", "Quimby", "Farihan", "Fairuz", "Karamina", "Salsika", "Avisa", "Izzatunnisa", "Latisha", "Cetta", "Naurah", "Tanisha", "Valeria", "Revita", "Pradipta", "Ufaira", "Ailani", "Andara", "Diva", "Nisrina", "Balerina", "Queena", "Maritza", "Sadina", "Kasmira", "Neely", "Austin", "Kassia", "Dalila",
      "Grazinia", "Bhanuwati", "Darra", "Belva", "Anjelita", "Venta", "Carlise", "Ivana", "Bidelia", "Clairine", "Emerald", "Calysta", "Isha", "Elfrida", "Brian", "Davine", "Liberti", "Aliza", "Hanne", "Talitha", "Lidia", "Naama", "Lillyann", "Grace", "Chastine", "Bentala", "Asri", "Bumi", "Ailsa", "Elvia", "Kaula", "Feodora", "Sofistika",
      "Elysia", "Martha", "Malihah", "Busyra", "Chasya", "Citraningtyas", "Daliani", "Indrani", "Erlina", "Bryna", "Laila", "Candrarini", "Dalilah", "Malka", "Raya", "Jasmina", "Costa", "Calestra", "Pramudita", "Cintamani", "Dariani", "Filia", "Astutu", "Odelia", "Dareen", "Catrin", "Zelda", "Ailen", "Alike", "Cosmina", "Candidia", "Elaine",
      "Chanda", "Olympia", "Tany", "Aldercy", "Layana", "Bilha", "Fayyola", "Selina", "Erlinda", "Donelia", "Farica", "Darlene", "Chiquita", "Aksata", "Danu", "Brahmacari", "Avigail", "Asta", "Azkiya", "Risqi", "Amadia", "Dahayu", "Saskara", "Elzira", "Belinda", "Della", "Aluma", "Annalisa", "Alysa", "Ginny", "Cosmo", "Kelyn", "Syamillah",
      "Kallista", "Agnimaya", "Cahyaningsih", "Analise", "Dami", "Kalyca", "Prakosa", "Hanessa", "Julia", "Najmi", "Axella", "Daya", "Darya", "Shakila", "Elfreda", "Githa", "Darpa", "Drina", "Ellard", "Lisette", "Quinn", "Arcadia", "Prana", "Armina", "Kalista", "Kira", "Raynelle", "Zevanna", "Sarisha", "Arsa", "Dea", "Floria", "Alisa", "Desma",
      "Dara", "Dhana", "Dwi", "Retisalya", "Candra", "Dilara", "Rajwa", "Diyanti", "Eliyani", "Avichayil", "Naomi", "Nathaniela", "Dristi", "Anita", "Bertha", "Annie", "Arsyfa", "Ardelis", "Elsa", "Dzakiyyah", "Makaila", "Aulia", "Chaka", "Hannah", "Vidya", "Gita", "Esma", "Bernice", "Ezra", "Drea", "Wanda", "Batya", "Decha", "Winola", "Indriani",
      "Niesha", "Alta", "Vera", "Nita", "Berenice", "Lena", "Elma", "Kalinda", "Elda", "Ganes", "Natha", "Viola", "Renita", "Esti", "Arabella", "Safa", "Naara", "Aziza", "Faustine", "Samiya", "Wanti", "Artanti", "Bica", "Faith", "Nuning", "Nancy", "Dulcie", "Vita", "Bella", "Fela", "Mia", "Evinka", "Oktavia", "Rostina", "Evita", "Arimbi", "Sheila",
      "Rahma", "Andraya", "Helsa", "Roselani", "Luvenia", "Bonita", "Chanah", "Fiorenza", "Ivanna", "Athalia", "Francesca", "Nuriel", "Birgitta", "Egberta", "Seraphina", "Evie", "Prihasini", "Hasywaza", "Adelheid", "Fera", "Cheryl", "Earlene", "Felda", "Raisa", "Agnia", "Adila", "Uzma", "Colleen", "Parahita", "Fitriyah", "Ervina", "Jaira", "Fitri",
      "Chesta", "Eviana", "Amira", "Huanran", "Anya", "Gabriela", "Alisia", "Cana", "Arvad", "Fedra", "Frida", "Froska", "Rosa", "Flaminia", "Calantha", "Delicia", "Sadie", "Agnesia", "Ardhiana", "Fira", "Lamuela", "Irena", "Raina", "Aderes", "Shana", "Binar", "Sunita", "Fruma", "Dian", "Mahika", "Nadia", "Kanti", "Ananta", "Galya", "Agnes", "Clorinda",
      "Gina", "Lucy", "Ghalya", "Ghaina", "Evacska", "Nasya", "Gelora", "Jensina", "Rosalinda", "Gauri", "Asenka", "Hana", "Callidora", "Ilona", "Samara", "Alina", "Anandita", "Hanum", "Adinda", "Hariani", "Elisabet", "Ajeng", "Areta", "Syareefa", "Nanda", "Harti", "Haifa", "Anisa", "Sophia", "Hanna", "Hera", "Hadara", "Hasna", "Hanan", "Milada", "Halu",
      "Hamidah", "Lucinda", "Floris", "Angeni", "Leyna", "Hani", "Hafsa", "Halimah", "Mariana", "Ghaliyah", "Santika", "Batsyua", "Rosalie", "Hawa", "Janita", "Nurul", "Huajin", "Harya", "Nadiya", "Haru", "Hafza", "Haiyun", "Hira", "Fritzi", "Chedva", "Kalea", "Eriati", "Aurilia", "Lydia", "Jenica", "Paramesti", "Montana", "Kinantan", "Gytha", "Adira",
      "Donabella", "Lemuela", "Oriana", "Jiaya", "Siti", "Jensen", "Gotzone", "Malinda", "Atsila", "Mahija", "Daphnah", "Daryati", "Irma", "Luluah", "Isma", "Sipta", "Irna", "Mutiara", "Mahatma", "Adsilah", "Fariisha", "Irina", "Agrasandhya", "Bening", "Nada", "Jingga", "Maduswara", "Darwisyah", "Erzsebet", "Leora", "Madeline", "Anneke", "Isti", "Fairus",
      "Cherish", "Alitza", "Artemis", "Evika", "Danielle", "Adar", "Edsel", "Olga", "Janan", "Luna", "Lutfia", "Hedva", "Hening", "Divya", "Molekhet", "Gilala", "Anggun", "Jeronima", "Hephzibah", "Hosanna", "Larisa", "Hope", "Xianlun", "Lutfiah", "Kolonica", "Chasye", "Darla", "Ioanna", "Neria", "Achazia", "Adamma", "Aryani", "Alessandra", "Mali", "Kineta",
      "Kostya", "Reseda", "Okalina", "Khulud", "Labibah", "Sidra", "Ruhua", "Fiona", "Marsya", "Naraya", "Sari", "Ghania", "Kyna", "Kiana", "Athaleta", "Christine", "Adeeva", "Adele", "Adelle", "Abigail", "Abriana", "Abshari", "Adhwa", "Adibah", "Adoria", "Adrienne", "Adsila", "Ady", "Aerilyn", "Afifa", "Afra", "Agata", "Aghna", "Agneta", "Ahlam", "Aiko",
      "Aila", "Aina", "Ainayya", "Aine", "Ainiya", "Ainun", "Aira", "Aisha", "Akselia", "Alayya", "Alecia", "Alexa", "Aleyza", "Alida", "Alika", "Alima", "Aliyah", "Almaqhvira", "Alula", "Alvina", "Amandla", "Amani", "Ambar", "Amberlie", "Amina", "Aminah", "Amirah", "Anahatta", "Andhara", "Andrina", "Aneila", "Aneira", "Angel", "Angelica", "Angie", "Angraeni",
      "Anica", "Anika", "Aniq", "Anjali", "Annika", "Anthea", "Apsarini", "Aquena", "Araminta", "Ardella", "Ardelle", "Ardhiningrum", "Argani", "Ariane", "Ariqa", "Aristawidya", "Arkana", "Arlene", "Armelle", "Armila", "Artanya", "Askana", "Askanah", "Asmira", "Asti", "Astrid", "Asya", "Atalie", "Atamarini", "Athifa", "Atika", "Atiqa", "Auberta", "Audrey",
      "Aura", "Aurantiasya", "Aurell", "Aurora", "Austrin", "Ava", "Aysha", "Azarine", "Azra", "Baptiste", "Bari&#8217;a", "Bawita", "Beata", "Beatrice", "Bela", "Belani", "Belita", "Benetta", "Berli", "Berliana", "Bernessa", "Berta", "Bertina", "Beruriah", "Beta", "Betula", "Bianca", "Bintang", "Biru", "Bitya", "Blenda", "Brenda", "Brilyani", "Brina",
      "Brites", "Bunga", "Burairah", "Caecilia", "Cahyaning", "Cahyati", "Cailah", "Caley", "Camani", "Camelia", "Candelaria", "Candragitha", "Cantik", "Cantika", "Cara", "Carani", "Carey", "Carika", "Carissa", "Carlene", "Carminda", "Cassandra", "Casthy", "Catriona", "Celena", "Celesta", "Cerelia", "Cerlia", "Chairunnisa", "Charis", "Chasia", "Chayra",
      "Chelsea", "Chenoa", "Chesna", "Chiara", "Chiko", "Chindaga", "Cian", "Cikal", "Cindaga", "Cindy", "Cinta", "Cintami", "Cintya", "Cira", "Citrananda", "Clara", "Clarabella", "Cloris", "Corailie", "Cut", "Cyrilla", "Dahlia", "Daiva", "Damaris", "Damia", "Damita", "Danessia", "Daniel", "Daralis", "Darby", "Darda", "Daria", "Daundra", "Davu", "Deandra",
      "Deeva", "Dema", "Despina", "Desta", "Destina", "Devika", "Devona", "Devota", "Diah", "Diamanda", "Diamontina", "Diana", "Disa", "Disaya", "Dita", "Diwei", "Dominique", "Dorelia", "Dorika", "Dorothy", "Durriyah", "Earlyta", "Eboni", "Edelia", "Ega", "Eggy", "Eileen", "Eilene", "Eka", "Ekanta", "Ekantika", "Elani", "Eleanor", "Elena", "Eleni", "Elia",
      "Elian", "Elicia", "Eliska", "Elita", "Eliza", "Ella", "Ellen", "Elvira", "Elyani", "Emi", "Endah", "Endang", "Entik", "Erela", "Erika", "Erinda", "Eritha", "Erlisa", "Ernestine", "Eros", "Esta", "Estella", "Etania", "Ethel", "Etilka", "Eustacia", "Eva", "Evanthe", "Fabian", "Fabiola", "Fabrianne", "Fakhirah", "Fanny", "Farah", "Farida", "Fariishta",
      "Fariza", "Farra", "Farrah", "Farren", "Fathiyya", "Fausta", "Fauziyah", "Fauziyyah", "Fay", "Febe", "Febishafira", "Femi", "Fengying", "Feny", "Fidel", "Fidelia", "Filipus", "Freda", "Frieda", "Gadis", "Gaelan", "Galen", "Galih", "Galina", "Galuh", "Gandhali", "Gaozhan", "Gati", "Gavrila", "Gecina", "Gema", "Gendis", "Gene", "Ghadah", "Ghalia", "Ghassan",
      "Ghina", "Gilana", "Gilda", "Gisela", "Gracemoon", "Gracia", "Grania", "Grazia", "Grazina", "Greta", "Grimonia", "Gunari", "Gunarsih", "Gunartika", "Gurit", "Guritna", "Gurnita", "Gustin", "Gwen", "Gyani", "Hadianti", "Hadriana", "Hafidha", "Hafshah", "Hagya", "Haiba", "Haisha", "Halifah", "Halima", "Halina", "Halona", "Halwa", "Hanah", "Handayani", "Hanesa",
      "Hanfiah", "Hanifah", "Hapsari", "Harietta", "Harum", "Harumi", "Haruni", "Hastanti", "Hava", "Haya", "Hayness", "Hedona", "Helen", "Helena", "Helga", "Helia", "Hellyn", "Helonia", "Hennie", "Hilda", "Hoshi", "Icasia", "Ida", "Ideh", "Idelia", "Ifani", "Iffa", "Iffah", "Ikawati", "Ike", "Ilsa", "Imaniar", "Imas", "Immaculata", "Inas", "Inayah", "Indrarini",
      "Indun", "Ines", "Inggrid", "Ingke", "Ingrid", "Ioulia", "Ira", "Irdina", "Isadora", "Ishy", "Isvara", "Isyraq", "Ivy", "Izso", "Jaantje", "Jadira", "Jahra", "Jamila", "Janetta", "Jani", "Jannie", "Jarima", "Jasmine", "Jauharah", "Javan", "Jazima", "Jeanelle", "Jecoliah", "Jelena", "Jenifer", "Jennifer", "Jezebel", "Jihan", "Jill", "Jinawi", "Jovian",
      "Judeana", "Juliana", "Julta", "Justina", "Justine", "Juventina", "Juwan", "Jyoti", "Kachine", "Kagami", "Kalei", "Kalena", "Kalifa", "Kama", "Kamea", "Kamilah", "Kamilia", "Kandake", "Kara", "Karaissa", "Karolina", "Kartika", "Kasih", "Katherina", "Kayla", "Kayyisa", "Keenar", "Keiko", "Kekira"
    );
    $a    = $list[array_rand($list)];
    $c    = strtolower($a);
    if (empty($c)) {
      $this->wanita();
    } else {
      if (!preg_match("/^[a-z]*$/", $c)) {
        $this->wanita();
      } else {
        return $c;
      }
    }
  }
  public function pria()
  {
    $list = array(
      "Abdad", "Adelard", "Adelio", "Adib", "Adiel", "Adli", "Adney", "Adom", "Adonis", "Agni", "Aidan", "Akash", "Akemi", "Akhdan", "Akins", "Akmal", "Aksel", "Albern", "Albern", "Alden", "Aldwin", "Algis", "Alib", "Alvaro", "Alvis", "Amanullah", "Amato", "Ames", "Andros", "Anjali", "Anjana", "Ansel", "Antares", "Anwar", "Apuila",
      "Araminta", "Ararya", "Archard", "Ardell", "Ardhani", "Arhab", "Arnawama", "Arsa", "Aruna", "Arvin", "Arvin", "Aryasatya", "Asadel", "Asker", "Athalia", "Atharwa", "Atid", "Axelle", "Aydin", "Azmi", "Azzam", "Bahy", "Balakosa", "Balin", "Baluku", "Banjiro", "Baqir", "Bariq", "Barnes", "Basil", "Bassam", "Bawika", "Bayanaka",
      "Bazyli", "Bertin", "Berwin", "Berwyn", "Berwyn", "Bhadra", "Bhadrika", "Birney", "Blenda", "Bonaro", "Bryna", "Buckley", "Buntala", "Byakta", "Camilo", "Carlen", "Aarav", "Abian", "Abraham", "Aciel", "Adam", "Adelard", "Adelio", "Aditya", "Adnan", "Adrian", "Adya", "Agam", "Agler", "Aileen", "Aldari", "Alexi", "Ansel",
      "Arsenio", "August", "Axel", "Aziel", "Bagas", "Balin", "Baron", "Barry", "Basil", "Bastian", "Baylor", "Ben", "Brady", "Brandon", "Brian", "Buana", "Cakra", "Caleb", "Cana", "Candra", "Carel", "Carlos", "Carya", "Cashel", "Cavan", "Chris", "Clovis", "Cullen", "Dafa", "Daffin", "Damar", "Daniel", "Danish", "Dareen", "Darel",
      "Darius", "Dary", "David", "Dax/Drax", "Deon", "Dermot", "Desmon", "Dilan", "Ducan", "Edwin", "Elard", "Eliot", "Eliseo", "Emery", "Emilio", "Eric", "Ervin", "Euan", "Evans", "Ezra", "Fahar", "Farel", "Farid", "Farzan", "Felix", "Ferdi", "Fergus", "Finn", "Fintan", "Fransisco", "Frey", "Galaxy", "Galen", "Galih", "Garett",
      "Garry", "Gavin", "Gerald", "Gibran", "Gibson", "Gilang", "Griffin", "Haidar", "Haris", "Harry", "Hart", "Hartigan", "Harun", "Hedy", "Horation", "Ian", "Ilham", "Irfan", "Ivan", "Ivander", "Ivar", "Janu", "Jarvis", "Jauzan", "Jaxton", "Jupiter", "Kaili", "Keenan", "Kendrick", "Killian", "Kyler", "Lais", "Lamont", "Lemuel",
      "Liam", "Lyman", "Malik", "Mallory", "Marva", "Michael", "Michiavelly", "Mulin", "Naaman", "Nanda", "Nathan", "Nevan", "Nicholas", "Oliver", "Omar", "Osmond", "Owen", "Patrick", "Penrod", "Phelan", "Phoenix", "Quinn", "Quirin", "Raden", "Radi", "Raditya", "Rafael", "Rai", "Rain", "Rainer", "Raymond", "Safwan", "Saguna",
      "Sakya", "Samuel", "Seth", "Simon", "Taksa", "Theo", "Thomi", "Tony", "Tristan", "Tyaga", "Uhtred", "Urdha", "Uri", "Uzi", "Valda", "Valentino", "Vincent", "Volker", "Wilfred", "Wren", "Wyman", "Xabat", "Xander", "Xavier", "Yeeshai", "Yosep", "Yuda", "Yusron", "Zafran", "Zayn", "Zayyan", "Zephyr", "Zeroun", "Aksa", "Arion",
      "Arvin", "Aliando", "Axelle", "Azada", "Adhitama", "Azura", "Abhimanyu", "Abayomi", "Azri", "Alvaro", "Arkana", "Arrayan", "Andhra", "Aydin", "Abrisam", "Achazia", "Abinaya", "Damian", "Delvin", "Delana", "Devan", "Dylan", "Evano", "Ersya", "Ephraim", "Elvano", "Edzard", "Faresta", "Fajrin", "Farrel", "Gandhi", "Gunadhya",
      "Kenzo", "Kalandra", "Kenan", "Keanu", "Kenzie", "Mahardika", "Mahendra", "Mahawira", "Melviano", "Mahaprana", "Mirza", "Madava", "Matteo", "Pradipa", "Pranadipa", "Prambudi", "Parviz", "Rezvan", "Raka", "Rafardhan", "Raefal", "Reinaldo", "Radhitya", "Reifansyah", "Rayshiva", "Radhika", "Rasendriya", "Raihan", "Rafisqy",
      "Randi", "Ravindra", "Syahreza", "Sayudha", "Shaquille", "Zaidan", "Zidan", "Zachery", "Abdad", "Abimana", "Abimanyu", "Abhicandra", "Abiyasa", "Abyasa", "Adicandra", "Adiguna", "Adinata", "Adipramana", "Adiwangsa", "Agnibrata", "Aji", "Andaru", "Aradhana", "Ardianto", "Arga", "Arjanta", "Arjuna", "Arya", "Apta", "Asmaralaya",
      "Astaguna", "Aswangga", "Bagaskoro", "Bajradaka", "Bamantara", "Barata", "Baskara", "Basuki", "Baswara", "Batara", "Bayuaji", "Bimo", "Birawa", "Bisma", "Bhagawanta", "Bhanu", "Budiono", "Brahma", "Bramantya", "Brawijaya", "Cahaya", "Cakrawala", "Cipta", "Cokroaminoto", "Cokroatmojo", "Damarlangit", "Daniswara", "Danurdara",
      "Darsa", "Dewandaru", "Dewangga", "Dhika", "Dipa", "Edi", "Endaru", "Estu", "Fajar", "Fusena", "Gadhing", "Ganendra", "Gentala", "Guinandra", "Gumelar", "Gunawan", "Guntur", "Hadinata", "Handaru", "Hasta", "Haribawa", "Harjita", "Hartadi", "Hendro", "Herdian", "Herjuno", "Indra", "Indradewa", "Ismoyono", "Jarot", "Jatmika",
      "Jaya", "Joko", "Jumanta", "Jumantara", "Kaesang", "Kamajaya", "Kamandaka", "Kawindra", "Karno", "Kawidagda", "Kresna", "Kukuh", "Kusna", "Kusumh", "Lakeswara", "Laksamana", "Lasmana", "Leksana", "Lesmana", "Lingga", "Lintang", "Listu", "Luhung", "Luhur", "Madaharsa", "Madana", "Madhani", "Madya", "Madyana", "Mahadana", "Mahadi",
      "Mahadri", "Mahaeswara", "Mahajana", "Mahapraja", "Mahatma", "Mandala", "Manggala", "Manikmaya", "Mardhi", "Muhadir", "Nareswara", "Nawang", "Nehan", "Nugraha", "Numatya", "Padmana", "Pambudi", "Parikesit", "Pinot", "Praba", "Pradana", "Pradipta", "Pramatya", "Pramono", "Pramudya", "Pranadibta", "Pranama", "Pranawa", "Prasaja",
      "Prasetyo", "Prasetyono", "Prastowo", "Rahagi", "Rahardian", "Raharja", "Rakabuming", "Rama", "Respati", "Sadana", "Sambara", "Sampurna", "Santoso", "Saputra", "Sasmaka", "Satria", "Satriya", "Septha", "Siswanto", "Sobiyanto", "Soenggono", "Sucipto", "Sudiro", "Sugiarto", "Surendra", "Surya", "Suryana", "Susilo", "Syaron",
      "Tamawijaya", "Tanaya", "Teja", "Tirta", "Tohpati", "Tulus", "Ubhaya", "Ulung", "Upasama", "Wajendra", "Wardana", "Wibisana", "Wibowo", "Widagdo", "Widayaka", "Widodo", "Widura", "Wicaksana", "Wijaya", "Wirya", "Wyakta", "Yudayana", "Yuwa", "Yoda", "Yoga", "Nadhifa", "Nadhif", "Rafiq", "Sharique", "Falah", "Nufail", "Gulfam",
      "Zaydan", "Radeya", "Qabeel", "Shidqi", "Daffa", "Nurdiansyah", "Rafif", "Hayyan", "Rafan", "Hafiz", "Hibratul", "Asla", "Ghazzal", "Ramdan", "Faruq", "Zhafar", "Labib", "Jazib", "Abqary", "Daniyal", "Ansa", "Azril", "Thabrani", "Fazal", "Fathan", "Dhakiy", "Nofal", "Fathar", "Maqil", "Shahbaz", "Fannan", "Salar", "Falih", "Ghanim",
      "Aflah", "Liban", "Fakhri", "Calixto", "Wildan", "Affan", "Hideaki", "Azwar", "Zavier", "Sharim", "Affandi", "Eshaal", "Mihran", "Haikal", "Alman", "Ashaz", "Shaquile", "Shawqi", "Dzakki", "Syathir", "Arsha", "Zahir", "Elvin", "Zhafran", "Ghifari", "Hafizhan", "Sinan", "Badar", "Ghafi", "Moazzam", "Fattah", "Rafeyfa", "Tsabit",
      "Alhasan", "Liyana", "Nuri", "Quraisy", "Syafa", "Syahputra", "Suparman", "Syairazy", "Qaddafi", "Hidayat", "Hidayatullah", "Alfarizqi", "Fadhil", "Israfil", "Arsalaan", "Muwaffaq", "Alfarezi", "Syabani", "Alhanan", "Muyassar", "Althaf", "Khattab", "Dhiaurrahman", "Alhusain", "Mannaf", "Danindra", "Zulfaqar", "Musyary", "Ilario",
      "Ghazawan", "Arroyyan", "Shafwaan", "Ghazalah", "Wistara", "Pramudana", "Uzair", "Arsalan", "Aqmar", "Budianto", "Zayan", "Ghazalan", "Zakri", "Hibrizi", "Hanif", "Fatin", "Mutawalli", "Akhtar", "Lewin", "Kurniawan", "Ghaashan", "Narayana", "Winasis", "Gohan", "Filardha", "Ataubaq", "Setiawan", "Saman", "Maulana", "Estiawan",
      "Abdullah", "Liyaqat", "Muazzam", "Shahzaib", "Fawwaz", "Zakaria", "Zahid", "Rasendria", "Mahmud", "Gulzar", "Faeyza", "Supriyadi", "Adzra", "Adzriel", "Almahdi", "Atharauf", "Amri", "Alhaq", "Azlan", "Akram", "Athafariz", "Alfandy", "Abil", "Alvino", "Afkar", "Adzril", "Azfer", "Azraqi", "Asyhab", "Alghaisan", "Ezar", "Firdaus",
      "Faizan", "Farhan", "Fachrul", "Fayeq", "Gafi", "Hafizh", "Hafla", "Ikhsanul", "Izza", "Kaif", "Kamal", "Khairan", "Luthfi", "Muhammad", "Muhamad", "Mazhar", "Mumtaaz", "Nadhir", "Nalendra", "Naqib", "Nizam", "Naufal", "Nabiil", "Pervaiz", "Rasya", "Rafka", "Raid", "Rayyan", "Riyasat", "Raize", "Ryuichi", "Rasil", "Said", "Syauqi",
      "Shafy", "Saifan", "Sarfaraz", "Shazad", "Shahnawaz", "Shakeel", "Thayyar", "Yusuf", "Zehan", "ZabdanAdira", "Adira", "Abyan", "Achmad", "Abid", "Abqari", "Azka", "Aaron", "Abdul", "Addar", "Adelardo", "Adhyastha", "Adirajada", "Adli", "Adolfo", "Adrianne", "Adriell", "Adry", "Agan", "Agra", "Agustin", "Ahmad", "Ahza", "Aidan", "Air",
      "Akbar", "Akhal", "Akhdan", "Akins", "Aksel", "Alamgir", "Alana", "Alaric", "Alastair", "Albert", "Alby", "Alcander", "Aldebaran", "Alden", "Aldrich", "Aldridge", "Alex", "Alexander", "Alexis", "Alfariel", "Alfi", "Alfin", "Alfred", "Algis", "Alifiandra", "Alkhalifi", "Alvian", "Alvin", "Alvina", "Alvis", "Alvredo", "Alwan", "Amada",
      "Amalul", "Amando", "Amani", "Amato", "Amiel", "Aminata", "Amran", "Anders", "Andra", "Andre", "Andrea", "Andres", "Andriel", "Andries", "Anggun", "Angkasa", "Anindito", "Anjali", "Antariksa", "Anton", "Antoni", "Antonius", "Anung", "Anwar", "Apresio", "Apuila", "Ardell", "Ardhani", "Ardiman", "Ardiona", "Ardiyanto", "Argani",
      "Arganta", "Argus", "Arif", "Arifin", "Ariq", "Aristides", "Ariz", "Arkaan", "Arkan", "Arkharega", "Armada", "Arman", "Armand", "Arnawama", "Arqam", "Arsa", "Arsakha", "Arsen", "Arumi", "Aruna", "Aryasatya", "Aryo", "Arzachel", "Arziki", "Asad", "Asdaq", "Asher", "Asker", "Aswanta", "Aswin", "Asyraaf", "Atalanta", "Athalia", "Athar",
      "Athaya", "Atmam", "Augustin", "Aurellio", "Awan", "Azam", "Azana", "Azhim", "Aziz", "Azzam", "Badruzzaman", "Bagaskara", "Bagus", "Bahari", "Baharu", "Bahir", "Bahlawan", "Bakti", "Bambang", "Bangkit", "Banjiro", "Bariq", "Bariz", "Barnes", "Basman", "Bastiaan", "Basukiharja", "Basurata", "Bayani", "Bayu", "Bazyli", "Bede", "Begawan",
      "Benett", "Benroy", "Bentang", "Benyamin", "Bert", "Berthold", "Berwyn", "Beryl", "Bibit", "Bima", "Bintang", "Binyamin", "Bios", "Blenda", "Boanerger", "Boas", "Boaz", "Bobby", "Bondan", "Bono", "Bragy", "Bramanty", "Branco", "Bryan", "Buddha", "Budi", "Buntari", "Burhan", "Cahya", "Cahyadi", "Cahyanto", "Cahyono", "Calesto", "Camilo",
      "Candrakanta", "Carl", "Carlen", "Carlin", "Carmy", "Carol", "Casey", "Casimira", "Catra", "Cayadi", "Ceceng", "Cecep", "Cetta", "Chaika", "Chaim", "Changyi", "Charles", "Chayim", "Chenoa", "Chepito", "Choni", "Christian", "Ciptadi", "Ciptana", "Citrahayi", "Clair", "Clement", "Cleosa", "Conan", "Cornelius", "Crisann", "Culbert", "Daiva",
      "Damita", "Dan", "Danadyaksa", "Danendra", "Daniello", "Danika", "Danu", "Danur", "Dar", "Darian", "Darielle", "Darka", "Darrell", "Darwin", "Dathan", "Dave", "Davine", "Davu", "Dean", "Deandre", "Deka", "Demas", "Deshi", "Dewa", "Dhimas", "Dhiwa", "Didimus", "Dihyan", "Dima", "Dimas", "Dipendra", "Dominick", "Don", "Donald", "Dor", "Doren",
      "Doron", "Dov", "Drajat", "Drew", "Duke", "Duma", "Duncan", "Dunrul", "Durwin", "Duta", "Dzaky", "Ebiet", "Edo", "Edsel", "Edward", "Ehud", "Eka", "Eko", "Elam", "Elfreda", "Elfredo", "Eli", "Elisha", "Elkanah", "Ellard", "Elpida", "Eman", "Emrick", "Enrick", "Epafras", "Eri", "Erlambang", "Erland", "Erlangga", "Erliansyah", "Ermina",
      "Ernest", "Erol", "Eros", "Ervito", "Ethel", "Ethelind", "Euthikus", "Evan", "Eyou", "Fabrizio", "Fadil", "Fagan", "Fahman", "Fahmi", "Fahreza", "Fahri", "Fairel", "Fairuz", "Fairuzt", "Faiz", "Fakhril", "Faraz", "Farran", "Farrell", "Farshad", "Fathir", "Fathul", "Fatih", "Fausta", "Faustin", "Favio", "Fayyadh", "Ferdinand", "Ferris",
      "Festus", "Fidel", "Fidelis", "Fidelyo", "Fikri", "Filbert", "Filemon", "Fortunatus", "Frank", "Frans", "Frederic", "Frederick", "Fredericque", "Fuad", "Gad", "Gading", "Gaharu", "Gajendra", "Galaksi", "Galang", "Galar", "Gamadi", "Ganda", "Ganjar", "Gaoqi", "Gaozhan", "Gardana", "Garick", "Garrry", "Gavriel", "Gavrila", "Gavyn", "Gayus",
      "Gent", "Geraldo", "Gerda", "Gesang", "Ghaffar", "Ghani", "Gian", "Giawan", "Gilbert", "Gilby", "Gilli", "Ginanjar", "Givon", "Giyanto", "Giyarto", "Giyono", "Godwin", "Gomer", "Gracio", "Greg", "Habakuk", "Habib", "Hadar", "Hadrian", "Hadwan", "Hakam", "Hakim", "Haldis", "Halibab", "Halimun", "Hamdan", "Hamengku", "Hamid", "Hamizan",
      "Hamzah", "Hannah", "Haocun", "Hardi", "Hardiyanta", "Harlan", "Harmanto", "Haruko", "Harvey", "Hassan", "Hatala", "Haya", "Hayyim", "Hazig", "Hector", "Helga", "Helmi", "Heman", "Henry", "Herman", "Hermandine", "Hernando", "Hershel", "Hipocrates", "Hisyam", "Hod", "Honesta", "Honesto", "Hope", "Hoshi", "Hoshiko", "Huanran", "Hugo",
      "Humam", "Humphreg", "Hutama", "I", "Iakovos", "Iaokim", "Ichabod", "Icuk", "Idrus", "Ihsan", "Ikrar", "Illias", "Imtiyaz", "Indarto", "Indrasta", "Indraya", "Iosep", "Iphigenia", "Ira", "Irfandi", "Irsyad", "Irvin", "Irwin", "Irzaldi", "Isaiah", "Iskandar", "Ismail", "Isolde", "Itamar", "Itzak", "Iwan", "Izrael", "Jagat", "Jahran",
      "Jaiman", "Jaka", "Jakeem", "Jakti", "Jaladri", "Jalandra", "Jalu", "Jamaludin", "James", "Jamil", "Jamin", "Jana", "Jananta", "Janggala", "Janitra", "Jarah", "Jarrvis", "Jati", "Jatiadi", "Jatinra", "Jatmiko", "Jauhari", "Javas", "Jayadi", "Jazmi", "Jedaiah", "Jeffrey", "Jenner", "JeraldineUltman", "Jeremy", "Jericho", "Jevera", "Jibran",
      "Jibril", "Jili", "Jiman", "Jinendra", "Joed", "John", "Johnathon", "Jonah", "Jordy", "Jorell", "Joseph", "Jovan", "Juha", "Julius", "Junaid", "Juniarso", "Junior", "Justin", "Justine", "Justyn", "Juvenal", "Kacey", "Kadin", "Kaemon", "Kahraman", "Kahuko", "Kaibo", "Kamudani", "Kanaka", "Kanaye", "Kandela", "Kanigara", "Kara", "Karsa",
      "Kastara", "Kawiwara", "Kayafas", "Kayana", "Kefin", "Keiko", "Kelana", "Kennard", "Kensel", "Kent", "Kentaro", "Kenway", "Keola", "Kerlap", "Kevin", "Khadim", "Khairullah", "Khairy", "Khalaf", "Khalda", "Khalfani", "Khalifa", "Khalil", "Khan", "Kijaora", "Kinnard", "Kiyoshi", "Komandaka", "Konrad", "Korg", "Kostya", "Kumara", "Lachlan",
      "Laksita", "Lakya", "Lamberto", "Lander", "Landry", "Langundo", "Lantang", "Laszlo", "Lateef", "Lauda", "Lavina", "Leader", "Leandro", "Leonard", "Leroy", "Li", "Lian", "Louis", "Luigi", "Lukas", "Lukman", "Lutfi", "Mada", "Mahasura", "Maheswara", "Mahfudh", "Mahija", "Mahogany", "Mahrus", "Makaio", "Makarim", "Maknar", "Maleakhi",
      "Mansur", "Mariel", "Marjan", "Marsa", "Maska", "Matan", "Mathew", "Medea", "Mehri", "Meilseoir", "Melvin", "Mengda", "Meshach", "Mikhail", "Miron", "Mordecai", "Mordechai", "Mudrik", "Mugisa", "Muinul", "Nabiha", "Nabil", "Nadav", "Nadindra", "Naeem", "Naga", "Nahum", "Najah", "Nala", "Nandana", "Nara", "Nararya", "Narda", "Nardi",
      "Narendra", "Naryama", "Natan", "Reynand", "Brigit", "Nurwahid", "Aqila", "Basupati", "Achilles", "Aldric", "Rahman", "Quthni", "Radmilo", "Orlando", "Prasraya", "Ainnurachman", "Mahya", "Amzar", "Syafi", "Pradipto", "Shuwan", "Runako", "Reymon", "Abdilah", "Halim", "Taufan", "Roberto", "Amzari", "Syahm", "Nakhla", "Caesar", "Nurdaffa",
      "Uinseann", "Basyir", "Juro", "Nismara", "Azzahidi", "Angel", "Einstain", "Luthfy", "Cirrillo", "Nabhan", "Basir", "Aloysius", "Angelo", "Archelaus", "Andreas", "Sandy", "Nobel", "Widy", "Zikri", "Marcello", "Putra", "Pratista", "Cendikia", "Saktika", "Tamim", "Pirata", "Hafidz", "Fakhriy", "Bratajaya", "Hanan", "Moissani", "Ramania",
      "Benedictus", "Fredella", "Heriberto", "Arnold", "Sangga", "Badhrika", "Jayasri", "Eksplora", "Hanindito", "Ath-Thahir", "Fajrial", "Gilda", "Hadyan", "Hardy", "Ananta", "Khairuddin", "Gabbriel", "Rifid", "Parahita", "Wid", "Batilada", "Panji", "Harith", "Dewanta", "Jonea", "Adhyatsa", "Virgie", "Bisyari", "Virendra", "Asuman", "Karsten",
      "Bumiputra", "Pastika", "Ardan", "Wirasena", "Adyatama", "Pratama", "Izzul", "Gardapati", "Aswari", "Ivanovich", "Everald", "Rey", "Rizky", "Rizal", "Ammar", "Qowi", "Baptiste", "Khawas", "Daffahimsa", "Wahyudi", "Jekonia", "Arrafif", "Al-hakim", "Solhidar", "Ozora", "Prabaswara", "Setyo", "Samudra", "Karisma", "Baupati", "Wagindra",
      "Bara", "Sasmita", "Cemerlang", "Martana", "Gaozan", "Matthew", "Otilie", "Geovanni", "Reuel", "Yaqdhan", "Janari", "Andhika", "Jentera", "Gershom", "Oded", "Alva", "Sadina", "Atarahman", "Aviel", "Cosmos", "Arkananta", "Antonio", "Ovid", "Gallio", "Asoka", "Fakhir", "Hafizuddin", "Bonaventura", "Ramon", "Aryanta", "Bumantara", "Rais",
      "Cakradara", "Prama", "Dikara", "Prabata", "Adir", "Deven", "Untaro", "Prayitna", "Sweeney", "Guy", "Budiharja", "Gustin", "Calya", "Clarence", "Giannes", "Babbage", "Titus", "Ardani", "Barnaby", "Amita", "Adlay", "Azel", "Citraloka", "Budaya", "Pancha", "Oriel", "Nicolas", "Millard", "Eben", "Jerrick", "Prasetya", "Dala", "Rasyid",
      "Zulfadhli", "Samitra", "Yusup", "Ramadhan", "Christhopper", "Saskara", "Danial", "Mayza", "Nurfattah", "Anargya", "Nugroho", "Mahesa", "Aharon", "Aquila", "Diaulhaq", "Hastanta", "Jagapati", "Andika", "Berta", "Hanani", "Jamaal", "Azio", "Arcadia", "Hyman", "Kennedy", "Wally", "Valora", "Sigra", "Rafandra", "Haryaka", "Rafi", "Ahlam",
      "Dumadi", "Adika", "Satya", "Jorim", "Salvito", "Hansel", "Avishai", "Pribadi", "Dominic", "Osaze", "Efraim", "Eagan", "Liu", "Ziggy", "Daruna", "Sunarta", "Waldi", "Leif", "Priya", "Ksatria", "Avram", "Nathanael", "Aindrea", "Onesimus", "Farjana", "Reynard", "Ammi", "Susila", "Godfrey", "Endra", "Faith", "Wira", "Yuri", "Fred", "Fredell",
      "Blandino", "Paramaditya", "Jerolin", "Beria", "Ethan", "Abidun", "Abner", "Fauzan", "Fakhrudin", "Atharizz", "Wiratama", "Rawikara", "Marwan", "Muslih", "Ojwala", "Carney", "Raynar", "Mursyid", "Naim", "Ghaisan", "Addis", "Fernando", "Etan", "Berakhiah", "Andrew", "Brighton", "Oriana", "Dabi", "Daya", "Adyatma", "Yudistira", "Cassidy",
      "Ganesha", "Setia", "Raiden", "Chaz", "Devon", "Benedict", "Knight", "Jakome", "Hilamovi", "Henning", "Sugih", "Syamil", "Majdudin", "Galia", "Langit", "Lazuardi", "Ramazan", "Hagai", "Maleeq", "Adeodatus", "Hanung", "Janadi", "Blake", "Jud", "Sigit", "Pancar", "Musyaffa", "Khairul", "Lambert", "Raima", "Hamun", "Hana", "Hanafi", "Handi",
      "Eisig", "Wang", "Hardiyanto", "Harja", "Fitriansyah", "Hartanta", "Satyawadi", "Yeremia", "Admon", "Hasnain", "Mufida", "Hastu", "Dorothy", "Aviv", "Hanis", "Gregor", "Rahmani", "Serafim", "Gregorius", "Damion", "Aitan", "Hadi", "Avagail", "Taoran", "Aiko", "Regan", "Uland", "Wayan", "Honor", "Zuhair", "Sastra", "Imaduddin", "Hastungkara",
      "Sahitya", "Abdi", "Questa", "Heber", "Adenin", "Najid", "Luqman", "Adiv", "Adley", "Dalton", "Lucius", "Rajendra", "Sukma", "Sarwadi", "Gemilang", "Watt", "Farquhar", "Kendra", "Yervant", "Acacio", "Resmi", "Wesa", "Dasha", "Aris", "Basunjaya", "Himawan", "Juhair", "Olga", "Aimar", "Wasis", "Cain", "Laurel", "Arlando", "Asmadi", "Edra",
      "Uistean", "Thian", "Narain", "Arnan", "Mutawakkil", "Osric", "Dawala", "Purwa", "Bahij", "Enoch", "Paramudya", "Daksa", "Nirwasita", "Zhishu", "Lamar", "Lukius", "Jareb", "Yafiq", "Semesta", "Aldan", "Antony", "Karim", "Muinurraja", "Reagan", "Khalish", "Khalis", "Cendana", "Gawain", "Uberto", "Autumn", "Ransi", "Nagata", "Epafram",
      "Giulio", "Kenward", "Laverrett", "Herwit", "Orea", "Adamya", "Jalila", "Marlen", "Madani", "Mahfuz", "Juhlan", "Urda", "Natha", "Agwa", "Al-Matin", "Muhsin", "Mumtazah", "Anarghya", "Mukhbit", "Quon", "Widyatmaka", "Malazi", "Anthony", "Marco", "Asyer", "Adsel", "Benito", "Martin", "Ozzie", "Ridhwan", "Wahab", "Aristo", "Paulus",
      "Musthafa", "Abel", "Yaga", "Rusyaidi", "Nafiz", "Rush", "Zahidin", "Pilar", "Manuela", "Erabbani", "Pranaja", "Poldi", "Early", "Mahanipuna", "Sadajiwa", "Adskhan", "Azhari", "Arief", "Geofrey", "Fachry", "Raffael", "Adhitya", "Alharon", "Pio", "Hady", "Bertin", "Afiq", "Fadhly", "Dien", "Fasyin", "Bagasditya", "Almeta", "Blade",
      "Arnawarma", "Jagratara", "Safaraz", "Soraya", "Aldel", "Gauzan", "Hirmawan", "Galileo", "Humayun", "Alfatih", "Bell", "Muhana", "Rayhan", "Tajuzzaman", "Bayanaka", "Shafwan", "Al", "Armanda", "Sasongko", "Demitrio", "Vavilov", "Mateo", "Yudhistira", "Naqiba", "Otadan", "Mutawakil", "Askari", "Dhiaurraham", "Baureksa", "Wicaksono",
      "Hammani", "Sava", "Kasturi", "Bahuwirya", "Wagiswari", "Bahaduri", "Adirajasa", "Cendekia", "Aurelio", "Khoirulanam", "Bartolomeus", "Schiaparelli", "Dakara", "Bhamakerti", "Reynord", "Mahogani", "Jamanika", "Issac", "Bratadikara", "Darma", "Suciatma", "Atmajaya", "Agnimaya", "Gafriel", "Aryaguna", "Rabbani", "Cakrajiya", "Prawira",
      "Kirana", "Aurelius", "Masato", "Jianheeng", "Cayarini", "Amrullah", "Liangyi", "Citrapata", "Ghossan", "Sagraha", "Hartawan", "Dalana", "Evarado", "Jasmani", "Hamidudin", "Claudius", "Demetria", "Abrizan", "Pribawa", "Abyakta", "Hamzari", "Hareshananda", "Xingsheng", "Pertiwi", "Supriyasa", "Ericson", "Prospera", "Wardani", "Aswono",
      "Socrates", "Ariane", "Prasojo", "Kencana", "Yuwana", "Maximilan", "Saverio", "Sidik", "Masyawir", "Calief", "Wasim", "Muhajir", "Muhaisin", "Azzamy", "Francesco", "Hemachandra", "Ruzain", "Gregory", "Wiryamanta", "Gastiadi", "Dimitrio", "Jiwatrisna", "Yogaswara", "Naladhipa", "Yichang", "Attila", "Sujiwa", "Wafi", "Jibrani", "Palupi",
      "Bhagaskara", "Jaladara", "Sahasika", "Hafuza", "Anam", "Hamas", "Hardana", "Khaizuran", "Harimurti", "Xiaohui", "Gurnita", "Haryanta", "Firaz", "Hariadi", "Hirawan", "Magnus", "Hasib", "Hanzalah", "Mendel", "Hammadi", "Gaogi", "Huwaidi", "Gede", "Yogiswara", "Tawwab", "Inas", "Satwika", "Watson", "Atamajaya", "Naja", "Ignasius", "Lughawi",
      "Conary", "Pramana", "Wirawan", "Wirasana", "Jamhari", "Macklin", "Budiman", "Rupadi", "Sejati", "Ugahari", "Jazali", "Junaldi", "Jonas", "Wardaya", "Abadi", "Raksi", "Ardiningrum", "Heta", "Ingelbert", "Zaiyani", "Jecolyn", "Budiawan", "Nitisara", "Paramartha", "Khairulanam", "Argya", "Kazim", "Sangkara", "Kamil", "Beaumont", "Ikanah",
      "Khuwailid", "Konstantin", "Domonic", "Kumaini", "Majid", "Polo", "Qixuan", "Hartanto"
    );
    $a    = $list[array_rand($list)];
    $c    = strtolower($a);
    if (empty($c)) {
      $this->pria();
    } else {
      if (!preg_match("/^[a-z]*$/", $c)) {
        $this->pria();
      } else {
        return $c;
      }
    }
  }
  public function fullname_pria()
  {
    $list1 = trim($this->pria()) . " " . trim($this->pria());
    $list2 = trim($this->pria()) . " " . trim($this->pria()) . " " . trim($this->pria());
    $list3 = trim($this->pria()) . " " . trim($this->pria()) . " " . trim($this->pria()) . " ".trim($this->pria());
    $rand  = array($list1, $list2, $list3);
    $rand1 = $rand[array_rand($rand)];
    if ($rand1) {
      return $rand1;
    } else {
      $this->fullname_pria();
    }
  }
  public function fullname_wanita()
  {
    $list1 = trim($this->wanita()) . " " . trim($this->wanita());
    $list2 = trim($this->wanita()) . " " . trim($this->wanita()) . " " . trim($this->wanita());
    $list3 = trim($this->wanita()) . " " . trim($this->wanita()) . " " . trim($this->wanita()) . " " . trim($this->wanita());
    $rand  = array($list1, $list2, $list3);
    $rand1 = $rand[array_rand($rand)];
    if ($rand1) {
      return $rand1;
    } else {
      $this->fullname_wanita();
    }
  }
  public function no($len)
  {
    $data = "1234567890";
    $wold = array();
    for ($a = 0; $a < $len; $a++) {
      $rand = rand(0, strlen($data) - 1);
      $word[$a] = $data[$rand];
    }
    $ww = implode("", $word);
    return $ww;
  }
  public function username($nama)
  {
    srand((float)microtime() * 1000000);
    $aaaa = str_replace(" ", "\n", $nama);
    $aaab = explode("\n", $aaaa);
    $aaac = $aaab[array_rand($aaab)];
    $aaad = $this->no(rand(5, 9));
    /**
     * Rand username with number 0-9 and charakter 
     */
    $rand1 = $aaab[array_rand($aaab)] . $aaad;
    $rand2 = $aaab[array_rand($aaab)] . "_";
    $rand3 = $aaab[array_rand($aaab)] . "_" . $aaad;
    $rand  = array($rand1, $rand2, $rand3);
    $ran   = $rand[array_rand($rand)];
    if (strlen($ran) < 6) {
      return $ran . $aaad;
    } else {
      return $ran;
    }
  }
  public function password($nama)
  {
    srand((float)microtime() * 1000000);
    $aaaa = str_replace(" ", "\n", $nama);
    $aaab = explode("\n", $aaaa);
    $aaac = $aaab[array_rand($aaab)];
    $aaad = $this->no(rand(1, 3));
    $aaae = array("@", "&", "_");
    $aaaf = $aaae[array_rand($aaae)];
    if (strlen(trim($aaac)) < 6) {
      $baaa = $aaac . $aaad;
      $baab = $aaac . $aaad . $aaaf;
      $baac = $aaaf . $aaac . $aaad;
      $baad = $aaaf . $aaad . $aaac;

      $caaa = array($baaa, $baab, $baac, $baad);
      $caab = $caaa[array_rand($caaa)];
      return trim($caab);
    } else {
      $baaa = $aaac . $aaad;
      $baab = $aaac . $aaaf;
      $baac = $aaaf . $aaac . $aaaf;
      $baad = $aaaf . $aaac;

      $caaa = array($baaa, $baab, $baac, $baad);
      $caab = $caaa[array_rand($caaa)];
      return trim($caab);
    }
  }
  public function email($nama)
  {
    $rd = rand(1, 5);
    $a4 = str_word_count($nama);
    $a  = str_replace(" ", "\n", $nama);
    $b  = explode("\n", $a);
    if ($a4 == 2) {
      $cc = $b[0];
      $c1 = $b[1];
      $eee = $cc . $this->no($rd);
      $ee1 = $c1 . $this->no($rd);
      $ee2 = $cc . "." . $this->no($rd);
      $ee3 = $c1 . "." . $this->no($rd);
      $ee4 = $cc . $c1;
      $ee5 = $c1 . $cc;
      $ee6 = $cc . $c1 . "." . $this->no($rd);
      $ee7 = $c1 . $cc . "." . $this->no($rd);
      $ee8 = $cc . "." . $this->no($rd) . "." . $c1;
      $ee9 = $c1 . "." . $this->no($rd) . "." . $cc;
      $e10 = $cc . $c1 . $this->no($rd);
      $e11 = $c1 . $cc . $this->no($rd);
      $list  = array($eee, $ee1, $ee2, $ee3, $ee4, $ee5, $ee6, $ee7, $ee8, $ee9, $e10, $e11);
      $em    = $list[array_rand($list)];
    } elseif ($a4 == 3 || $a4 == 4) {
      $dd = $b[0];
      $d1 = $b[1];
      $d2 = $b[2];
      $eee = $dd . $this->no($rd);
      $ee1 = $d1 . $this->no($rd);
      $ee2 = $d2 . $this->no($rd);
      $ee3 = $dd . "." . $this->no($rd);
      $ee4 = $d1 . "." . $this->no($rd);
      $ee5 = $d2 . "." . $this->no($rd);
      $ee6 = $dd . $d1;
      $ee7 = $d1 . $d2;
      $ee8 = $d2 . $dd;
      $ee9 = $dd . $d1 . $this->no($rd);
      $e10 = $d1 . $d2 . $this->no($rd);
      $e11 = $d2 . $dd . $this->no($rd);
      $e12 = $dd . $d1 . "." . $this->no($rd);
      $e13 = $d1 . $d2 . "." . $this->no($rd);
      $e14 = $d2 . $dd . "." . $this->no($rd);
      $e15 = $dd . "." . $d1;
      $e16 = $d1 . "." . $d2;
      $e17 = $d2 . "." . $dd;
      $e18 = $dd . "." . $d1 . $this->no($rd);
      $e19 = $d1 . "." . $d2 . $this->no($rd);
      $e20 = $d2 . "." . $dd . $this->no($rd);
      $list = array($eee, $ee1, $ee2, $ee3, $ee4, $ee5, $ee6, $ee7, $ee8, $ee9, $e10, $e11, $e12, $e13, $e14, $e15, $e16, $e17, $e18, $e19, $e20);
      $em   = $list[array_rand($list)];
    }
    $mai   = array("@gmail.com", "@yahoo.com", "@hotmail.com");
    $mail  = $mai[array_rand($mai)];
    $email = $em . $mail;
    return $email;
  }
  public function phone()
  {
    $list = array("62811", "62812", "62813", "62821", "62822", "62823", "62851", "62852", "62853", "62814", "62815", "62816", "62855", "62856", "62857", "62858", "62817", "62818", "62819", "62859", "62877", "62878", "62838", "62831", "62832", "62833", "62895", "62896", "62898", "62898", "62899", "62881", "62882", "62883", "62884", "62885", "62886", "62887", "62888", "62889");
    $rand = $list[array_rand($list)];
    $phon = $rand . $this->no(8);
    return $phon;
  }
  public function fake($rand = null)
  {
    if (!$rand) {
      $rand = rand(1, 2);
    }
    if ($rand == 1) {
      $nama = $this->fullname_pria();
      $res['jenis'] = "pria";
      $res['nama']  = $nama;
      $res['user']  = $this->username($nama);
      $res['pass']  = $this->password($nama);
      $res['email'] = $this->email($nama);
      $res['phone'] = $this->phone();
      return $res;
    } elseif ($rand == 2) {
      $nama = $this->fullname_wanita();
      $res['jenis'] = "wanita";
      $res['nama']  = $nama;
      $res['user']  = $this->username($nama);
      $res['pass']  = $this->password($nama);
      $res['email'] = $this->email($nama);
      $res['phone'] = $this->phone();
      return $res;
    } else {
      $this->fake();
    }
  }
}

