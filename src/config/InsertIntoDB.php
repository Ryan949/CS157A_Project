<?php
require_once("Config.php");

// Create connection
$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if ($mysqli->connect_error) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = array( 
"use " . DB,

"delete from company;",
"delete from employee;", 
"delete from share;", 
"delete from stock;", 
"delete from stockmarket;",

"INSERT INTO `Company` (`CompanyName`, `Address`, `EmployeeSize`, `CEO`, `Founded`, `IndustryType`) VALUES".
"('20 20 Printing Inc', '195 13n N', 205343, 'Bayless', '2016-11-27 09:27:25', 'Goverment'),".
"('A All American Travel Inc', '7116 Western Ave', 339328, 'Silvestrini', '2016-11-27 09:27:25', 'Software'),".
"('A K Construction Co', '2737 Pistorio Rd #9230', 961505, 'Hoogland', '2016-11-27 09:27:25', 'Software'),".
"('A R Packaging', '2887 Knowlton St #5435', 182874, 'Degonia', '2016-11-27 09:27:25', 'Software'),".
"('Abc Enterprises Inc', '678 3rd Ave', 754227, 'Perin', '2016-11-27 09:27:25', 'Hardware'),".
"('Accurel Systems Intrntl Corp', '19 Amboy Ave', 236131, 'Claucherty', '2016-11-27 09:27:25', 'Hardware'),".
"('Ace Signs Inc', '7 W Wabansia Ave #227', 721903, 'Staback', '2016-11-27 09:27:25', 'Software'),".
"('Acme Supply Co', '1953 Telegraph Rd', 196213, 'Devreese', '2016-11-27 09:27:25', 'Hardware'),".
"('Acqua Group', '810 N La Brea Ave', 620852, 'Klang', '2016-11-27 09:27:25', 'Software'),".
"('Admiral Party Rentals & Sales', '8927 Vandever Ave', 913048, 'Padilla', '2016-11-27 09:27:25', 'Software'),".
"('Advantage Martgage Company', '73 W Barstow Ave', 422400, 'Acuff', '2016-11-27 09:27:25', 'Hardware'),".
"('Affiliated With Travelodge', '63 E Aurora Dr', 493464, 'Motley', '2016-11-27 09:27:25', 'Software'),".
"('Alabama Educational Tv Comm', '45 2nd Ave #9759', 831931, 'Candlish', '2016-11-27 09:27:25', 'Software'),".
"('Alexander & Alexander Inc', '4923 Carey Ave', 245636, 'Sama', '2016-11-27 09:27:25', 'Hardware'),".
"('Alinabal Inc', '72 Mannix Dr', 419081, 'Merced', '2016-11-27 09:27:25', 'Software'),".
"('Alpenlite Inc', '201 Hawk Ct', 202334, 'Pugh', '2016-11-27 09:27:25', 'Software'),".
"('Amazonia Film Project', '88 Sw 28th Ter', 567844, 'Mcnease', '2016-11-27 09:27:25', 'Software'),".
"('Ambelang, Jessica M Md', '74989 Brandon St', 11692, 'Parlato', '2016-11-27 09:27:25', 'Software'),".
"('American Arts & Graphics', '7 W Pinhook Rd', 127325, 'Korando', '2016-11-27 09:27:25', 'Hardware'),".
"('American Council On Sci & Hlth', '636 Commerce Dr #42', 19394, 'Neither', '2016-11-27 09:27:25', 'Software'),".
"('American Speedy Printing Ctrs', '7563 Cornwall Rd #4462', 627893, 'Hirpara', '2016-11-27 09:27:25', 'Hardware'),".
"('Ames Stationers', '60 Fillmore Ave', 223572, 'Cryer', '2016-11-27 09:27:25', 'Goverment'),".
"('Anchor Computer Inc', '13 S Hacienda Dr', 118534, 'Canlas', '2016-11-27 09:27:25', 'Health'),".
"('Anchorage Museum Of Hist & Art', '3 State Route 35 S', 125676, 'Sawchuk', '2016-11-27 09:27:25', 'Hardware'),".
"('Anderson, Mark A Esq', '8728 S Broad St', 990481, 'Rauser', '2016-11-27 09:27:25', 'Health'),".
"('Andrews, J Robert Esq', '1128 Delaware St', 819324, 'Baltimore', '2016-11-27 09:27:25', 'Health'),".
"('Anker Law Office', '461 Prospect Pl #316', 876216, 'Munns', '2016-11-27 09:27:25', 'Software'),".
"('Armon Communications', '9 State Highway 57 #22', 684855, 'Husser', '2016-11-27 09:27:25', 'Hardware'),".
"('Art Crafters', '703 Beville Rd', 44000, 'Pinilla', '2016-11-27 09:27:25', 'Hardware'),".
"('Arthur A Oliver & Son Inc', '59 N Groesbeck Hwy', 400023, 'Hollack', '2016-11-27 09:27:25', 'Software'),".
"('Arturi, Peter D Esq', '4441 Point Term Mkt', 213894, 'Meinerding', '2016-11-27 09:27:25', 'Health'),".
"('Asendorf, J Alan Esq', '866 34th Ave', 382655, 'Paulas', '2016-11-27 09:27:25', 'Goverment'),".
"('Assink, Anne H Esq', '3 Fort Worth Ave', 643461, 'Shields', '2016-11-27 09:27:25', 'Software'),".
"('Atc Contracting', '5 Washington St #1', 33650, 'Ankeny', '2016-11-27 09:27:25', 'Software'),".
"('Bailey Cntl Co Div Babcock', '83 County Road 437 #8581', 637685, 'Papasergi', '2016-11-27 09:27:25', 'Health'),".
"('Bailey Transportation Prod Inc', '347 Chestnut St', 547468, 'Rodenberger', '2016-11-27 09:27:25', 'Goverment'),".
"('Baird Kurtz & Dobson', '82 Winsor St #54', 968939, 'Funnell', '2016-11-27 09:27:25', 'Software'),".
"('Ballard Spahr Andrews', '39 S 7th St', 660025, 'Nestle', '2016-11-27 09:27:25', 'Health'),".
"('Bank Of New York', '2167 Sierra Rd', 170997, 'Grenet', '2016-11-27 09:27:25', 'Health'),".
"('Barkan, Neal J Esq', '46314 Route 130', 349619, 'Pedrozo', '2016-11-27 09:27:25', 'Software'),".
"('Beck Horizon Builders', '3 Secor Rd', 649649, 'Klusman', '2016-11-27 09:27:25', 'Software'),".
"('Bender & Hatley Pc', '185 Blackstone Bldge', 898558, 'Cetta', '2016-11-27 09:27:25', 'Health'),".
"('Benoff, Edward Esq', '429 Tiger Ln', 259994, 'Kitzman', '2016-11-27 09:27:25', 'Hardware'),".
"('Benton, John B Jr', '6649 N Blue Gum St', 99623, 'Butt', '2016-11-27 09:27:25', 'Goverment'),".
"('Berg, Charles E', '287 Youngstown Warren Rd', 60900, 'Cousey', '2016-11-27 09:27:25', 'Software'),".
"('Berhanu International Foods', '755 Harbor Way', 726505, 'Tegarden', '2016-11-27 09:27:25', 'Software'),".
"('Beutelschies & Company', '47154 Whipple Ave Nw', 35948, 'Barfield', '2016-11-27 09:27:25', 'Software'),".
"('Biltmore Investors Bank', '52777 Leaders Heights Rd', 47716, 'Dilello', '2016-11-27 09:27:25', 'Software'),".
"('Binswanger', '4 Kohler Memorial Dr', 794648, 'Adkin', '2016-11-27 09:27:25', 'Software'),".
"('Birite Foodservice Distr', '3717 Hamann Industrial Pky', 326572, 'Vinning', '2016-11-27 09:27:25', 'Hardware'),".
"('Bjork, Robert D Jr', '189 Village Park Rd', 944683, 'Limmel', '2016-11-27 09:27:25', 'Hardware'),".
"('Black History Resource Center', '8 Us Highway 22', 392118, 'Saras', '2016-11-27 09:27:25', 'Software'),".
"('Bollinger Mach Shp & Shipyard', '209 Decker Dr', 913401, 'Malet', '2016-11-27 09:27:25', 'Hardware'),".
"('Bolton, Wilbur Esq', '69734 E Carrillo St', 392653, 'Garufi', '2016-11-27 09:27:25', 'Software'),".
"('Bonnet & Daughter', '6882 Torresdale Ave', 152718, 'Farrar', '2016-11-27 09:27:25', 'Hardware'),".
"('Bosco, Paul J', '8 Mcarthur Ln', 719708, 'Rantanen', '2016-11-27 09:27:25', 'Health'),".
"('Box, J Calvin Esq', '9390 S Howell Ave', 718434, 'Cartan', '2016-11-27 09:27:25', 'Health'),".
"('Bradley Nameplate Corp', '87 Imperial Ct #79', 5645, 'Hengel', '2016-11-27 09:27:25', 'Hardware'),".
"('Branford Wire & Mfg Co', '14288 Foster Ave #4121', 349907, 'Monarrez', '2016-11-27 09:27:25', 'Health'),".
"('Bresler Eitel Framg Gllry Ltd', '4646 Kaahumanu St', 170790, 'Smith', '2016-11-27 09:27:25', 'Health'),".
"('Brooks, Morris J Jr', '987 Main St', 277940, 'Newville', '2016-11-27 09:27:25', 'Goverment'),".
"('Buckley Miller & Wright', '98 Connecticut Ave Nw', 967664, 'Ruta', '2016-11-27 09:27:25', 'Software'),".
"('Buergi & Madden Scale', '1933 Packer Ave #2', 215317, 'Harabedian', '2016-11-27 09:27:25', 'Software'),".
"('Burrows, Jon H Esq', '393 Hammond Dr', 106206, 'Storment', '2016-11-27 09:27:25', 'Goverment'),".
"('Burton & Davis', '70 Mechanic St', 715474, 'Bitsuie', '2016-11-27 09:27:25', 'Goverment'),".
"('Business Systems Of Wis Inc', '812 S Haven St', 662625, 'Pontoriero', '2016-11-27 09:27:25', 'Software'),".
"('C 4 Network Inc', '6 Greenleaf Ave', 987032, 'Inouye', '2016-11-27 09:27:25', 'Goverment'),".
"('C W D C Metal Fabricators', '2 A Kelley Dr', 962065, 'Threets', '2016-11-27 09:27:25', 'Hardware'),".
"('Calaveras Prospect', '6201 S Nevada Ave', 681163, 'Kaniecki', '2016-11-27 09:27:25', 'Software'),".
"('Cali Sportswear Cutting Dept', '3 Railway Ave #75', 895945, 'Berganza', '2016-11-27 09:27:25', 'Software'),".
"('Cambridge Inn', '90131 J St', 596519, 'Shire', '2016-11-27 09:27:25', 'Software'),".
"('Campbell, Jan Esq', '992 Civic Center Dr', 780957, 'Radde', '2016-11-27 09:27:25', 'Health'),".
"('Campbell, Robert A', '4 Cowesett Ave', 789295, 'Andreason', '2016-11-27 09:27:25', 'Hardware'),".
"('Can Tron', '369 Latham St #500', 695582, 'Semidey', '2016-11-27 09:27:25', 'Health'),".
"('Cangro Transmission Co', '17 Jersey Ave', 917372, 'Hudnall', '2016-11-27 09:27:25', 'Software'),".
"('Cape & Associates Real Estate', '5 Little River Tpke', 268237, 'Polidori', '2016-11-27 09:27:25', 'Hardware'),".
"('Capitol Reporters', '6916 W Main St', 699173, 'Theodorov', '2016-11-27 09:27:25', 'Health'),".
"('Carmichael, Jeffery L Esq', '6 Middlegate Rd #106', 226823, 'Waymire', '2016-11-27 09:27:25', 'Software'),".
"('Carol, Drake Sparks Esq', '2 Monroe St', 954316, 'Rochin', '2016-11-27 09:27:25', 'Software'),".
"('Carriage House Cllsn Rpr Inc', '35 E Main St #43', 258324, 'Breland', '2016-11-27 09:27:25', 'Software'),".
"('Carroccio, A Thomas Esq', '2239 Shawnee Mission Pky', 132102, 'Shin', '2016-11-27 09:27:25', 'Goverment'),".
"('Cascade Realty Advisors Inc', '366 South Dr', 291883, 'Vocelka', '2016-11-27 09:27:25', 'Health'),".
"('Casco Services Inc', '96541 W Central Blvd', 42322, 'Eschberger', '2016-11-27 09:27:25', 'Software'),".
"('Case Foundation Co', '4252 N Washington Ave #9', 350809, 'Toyama', '2016-11-27 09:27:25', 'Software'),".
"('Centerline Engineering', '86350 Roszel Rd', 702100, 'Borgman', '2016-11-27 09:27:25', 'Software'),".
"('Central Die Casting Mfg Co Inc', '1610 14th St Nw', 806976, 'Ostolaza', '2016-11-27 09:27:25', 'Hardware'),".
"('Centro Inc', '17 Us Highway 111', 748045, 'Lungren', '2016-11-27 09:27:25', 'Software'),".
"('Century 21 Krall Real Estate', '33 Lewis Rd #46', 135486, 'Hughey', '2016-11-27 09:27:25', 'Software'),".
"('Century Communications', '73 State Road 434 E', 280943, 'Poquette', '2016-11-27 09:27:25', 'Software'),".
"('Ceramic Tile Sales Inc', '62260 Park Stre', 655466, 'Arceo', '2016-11-27 09:27:25', 'Hardware'),".
"('Chadds Ford Winery', '229 N Forty Driv', 774535, 'Springe', '2016-11-27 09:27:25', 'Health'),".
"('Chanay, Jeffrey A Esq', '4 B Blue Ridge Blvd', 357713, 'Darakjy', '2016-11-27 09:27:25', 'Software'),".
"('Chang, Carolyn Esq', '749 W 18th St #45', 579115, 'Craghead', '2016-11-27 09:27:25', 'Hardware'),".
"('Chapman, Ross E Esq', '3 Mcauley Dr', 500716, 'Morasca', '2016-11-27 09:27:25', 'Hardware'),".
"('Chemel, James L Cpa', '8 W Cerritos Ave #54', 499116, 'Venere', '2016-11-27 09:27:25', 'Hardware'),".
"('Chilton Malting Co', '1 Rancho Del Mar Shopping C', 825598, 'Thyberg', '2016-11-27 09:27:25', 'Hardware'),".
"('Chinese Translation Resources', '83649 W Belmont Ave', 87248, 'Gibes', '2016-11-27 09:27:25', 'Health'),".
"('Cindy Turner Associates', '20 S Babcock St', 603008, 'Ferencz', '2016-11-27 09:27:25', 'Hardware'),".
"('Circuit Solution Inc', '39 Moccasin Dr', 232846, 'Nachor', '2016-11-27 09:27:25', 'Health'),".
"('Clark, Richard Cpa', '386 9th Ave N', 44898, 'Figeroa', '2016-11-27 09:27:25', 'Software'),".
"('Cleaning Station Inc', '25346 New Rd', 518463, 'Denooyer', '2016-11-27 09:27:25', 'Hardware'),".
"('Cobb, James O Esq', '26849 Jefferson Hwy', 146500, 'Wildfong', '2016-11-27 09:27:25', 'Software'),".
"('Coldwell Bnkr Wright Real Est', '50 E Wacker Dr', 273609, 'Mconnell', '2016-11-27 09:27:25', 'Health'),".
"('Colony Paints Sales Ofc & Plnt', '13252 Lighthouse Ave', 848031, 'Matuszak', '2016-11-27 09:27:25', 'Software'),".
"('Colts Neck Medical Assocs Inc', '406 Main St', 110638, 'Corbley', '2016-11-27 09:27:25', 'Software'),".
"('Comfort Inn', '55892 Jacksonville Rd', 465551, 'Kulzer', '2016-11-27 09:27:25', 'Health'),".
"('Commercial Press', '7 W Jackson Blvd', 913628, 'Dilliard', '2016-11-27 09:27:25', 'Software'),".
"('Computer Repair Service', '70 Euclid Ave #722', 740937, 'Latzke', '2016-11-27 09:27:25', 'Health'),".
"('Conte, Christopher A Esq', '70 W Main St', 286217, 'Isenhower', '2016-11-27 09:27:25', 'Software'),".
"('Corn Popper', '523 Marquette Ave', 212130, 'Boord', '2016-11-27 09:27:25', 'Software'),".
"('Courtyard By Marriott', '80 Pittsford Victor Rd #9', 611453, 'Nabours', '2016-11-27 09:27:25', 'Software'),".
"('Cowan & Kelly', '469 Outwater Ln', 243332, 'Chesterfield', '2016-11-27 09:27:25', 'Hardware'),".
"('Creative Business Systems', '55262 N French Rd', 337397, 'Leto', '2016-11-27 09:27:25', 'Software'),".
"('Cullen, Terrence P Esq', '76598 Rd  I 95 #1', 94566, 'Kiel', '2016-11-27 09:27:25', 'Hardware'),".
"('Cummins Southern Plains Inc', '63381 Jenks Ave', 77884, 'Yum', '2016-11-27 09:27:25', 'Health'),".
"('Custom Engineering Inc', '8 County Center Dr #647', 209935, 'Menter', '2016-11-27 09:27:25', 'Hardware'),".
"('Dal Tile Corporation', '422 E 21st St', 528061, 'Luczki', '2016-11-27 09:27:25', 'Software'),".
"('Davis, Maxon R Esq', '33 N Michigan Ave', 890726, 'Keneipp', '2016-11-27 09:27:25', 'Software'),".
"('Dee, Deanna', '95 Main Ave #2', 239713, 'Walthall', '2016-11-27 09:27:25', 'Software'),".
"('Defur Voran Hanley Radcliff', '2140 Diamond Blvd', 813732, 'Sarbacher', '2016-11-27 09:27:25', 'Hardware'),".
"('Del Charro Apartments', '617 Nw 36th Ave', 980435, 'Cantres', '2016-11-27 09:27:25', 'Hardware'),".
"('Deltam Systems Inc', '3270 Dequindre Rd', 400644, 'Suffield', '2016-11-27 09:27:25', 'Health'),".
"('Denbrook, Myron', '60 Old Dover Rd', 599725, 'Hoffis', '2016-11-27 09:27:25', 'Hardware'),".
"('Dentalaw Divsn Hlth Care', '43 Huey P Long Ave', 187114, 'Lace', '2016-11-27 09:27:25', 'Hardware'),".
"('Desco Equipment Corp', '72868 Blackington Ave', 852748, 'Perez', '2016-11-27 09:27:25', 'Software'),".
"('Desert Sands Motel', '2023 Greg St', 295487, 'Maynerich', '2016-11-27 09:27:25', 'Hardware'),".
"('Development Authority', '78112 Morris Ave', 638295, 'Layous', '2016-11-27 09:27:25', 'Hardware'),".
"('Di Cristina J & Son', '170 Wyoming Ave', 995968, 'Goldammer', '2016-11-27 09:27:25', 'Health'),".
"('Dill Dill Carr & Stonbraker Pc', '93 Redmond Rd #492', 700652, 'Steier', '2016-11-27 09:27:25', 'Software'),".
"('Dimmock, Thomas J Esq', '1482 College Ave', 216197, 'Diestel', '2016-11-27 09:27:25', 'Hardware'),".
"('Dobscha, Stephen F Esq', '40 Cambridge Ave', 171149, 'Gabisi', '2016-11-27 09:27:25', 'Software'),".
"('Dock Seal Specialty', '8590 Lake Lizzie Dr', 26671, 'Mcdoniel', '2016-11-27 09:27:25', 'Software'),".
"('Dorl, James J Esq', '2371 Jerrold Ave', 136362, 'Amigon', '2016-11-27 09:27:25', 'Health'),".
"('Double B Foods Inc', '25657 Live Oak St', 251961, 'Aredondo', '2016-11-27 09:27:25', 'Goverment'),".
"('Dunnells & Duvall', '560 Civic Center Dr', 689300, 'Malvin', '2016-11-27 09:27:25', 'Hardware'),".
"('E A I Electronic Assocs Inc', '69 Marquette Ave', 863123, 'Dickerson', '2016-11-27 09:27:25', 'Software'),".
"('E T Balancing Co Inc', '35433 Blake St #588', 388841, 'Kohl', '2016-11-27 09:27:25', 'Software'),".
"('Eagle Software Inc', '5384 Southwyck Blvd', 675794, 'Strassner', '2016-11-27 09:27:25', 'Software'),".
"('Earnhardt Printing', '3387 Ryan Dr', 510839, 'Lizama', '2016-11-27 09:27:25', 'Hardware'),".
"('East Coast Marketing', '4 Otis St', 334409, 'Seewald', '2016-11-27 09:27:25', 'Software'),".
"('Eder Assocs Consltng Engrs Pc', '6980 Dorsett Rd', 64835, 'Rulapaugh', '2016-11-27 09:27:25', 'Hardware'),".
"('Edison Supply & Equipment Co', '9 Vanowen St', 680214, 'Raymo', '2016-11-27 09:27:25', 'Software'),".
"('Edward S Katz', '501 N 19th Ave', 274739, 'Stem', '2016-11-27 09:27:25', 'Hardware'),".
"('Egnor, W Dan Esq', '90177 N 55th Ave', 566202, 'Suell', '2016-11-27 09:27:25', 'Software'),".
"('Eis Environmental Engrs Inc', '42754 S Ash Ave', 491733, 'Fredicks', '2016-11-27 09:27:25', 'Health'),".
"('Eldridge, Kristin K Esq', '4 Warehouse Point Rd #7', 485924, 'Maybury', '2016-11-27 09:27:25', 'Software'),".
"('Evans Rule Company', '38062 E Main St', 699606, 'Mugnolo', '2016-11-27 09:27:25', 'Hardware'),".
"('Evans, C Kelly Esq', '303 N Radcliffe St', 25081, 'Degroot', '2016-11-27 09:27:25', 'Software'),".
"('Facebook', '1 Menlo Park', 12131, 'Mark Zuckerberg', '2001-07-21 09:23:22', 'Software'),".
"('Fairbanks Scales', '3196 S Rider Trl', 197987, 'Arias', '2016-11-27 09:27:25', 'Hardware'),".
"('Farmers Insurance Group', '1 State Route 27', 674862, 'Whobrey', '2016-11-27 09:27:25', 'Goverment'),".
"('Farrell & Johnson Office Equip', '2094 Ne 36th Ave', 294934, 'Munis', '2016-11-27 09:27:25', 'Software'),".
"('Faw, James C Cpa', '23 Palo Alto Sq', 671766, 'Auffrey', '2016-11-27 09:27:25', 'Health'),".
"('Fbs Business Finance', '775 W 17th St', 572271, 'Gillian', '2016-11-27 09:27:25', 'Software'),".
"('Feiner Bros', '25 E 75th St #69', 965050, 'Caldarera', '2016-11-27 09:27:25', 'Health'),".
"('Feltz Printing Service', '639 Main St', 700409, 'Paprocki', '2016-11-27 09:27:25', 'Software'),".
"('Fiorucci Foods Usa Inc', '50126 N Plankinton Ave', 771553, 'Yori', '2016-11-27 09:27:25', 'Software'),".
"('Five Star Limousines Of Tx Inc', '87895 Concord Rd', 763471, 'Mccullan', '2016-11-27 09:27:25', 'Software'),".
"('Flash, Elena Salerno Esq', '3882 W Congress St #799', 349604, 'Tawil', '2016-11-27 09:27:25', 'Software'),".
"('Fleetwood Building Block Inc', '326 E Main St #6496', 490546, 'Knipp', '2016-11-27 09:27:25', 'Hardware'),".
"('Fligg, Kenneth I Jr', '37 Alabama Ave', 447742, 'Gato', '2016-11-27 09:27:25', 'Health'),".
"('Floral Expressions', '206 Main St #2804', 638378, 'Reiber', '2016-11-27 09:27:25', 'Software'),".
"('Ford Brothers Wholesale Inc', '1 N Harlem Ave #9', 498629, 'Riopelle', '2016-11-27 09:27:25', 'Goverment'),".
"('Forest Fire Laboratory', '25 Se 176th Pl', 615044, 'Jurney', '2016-11-27 09:27:25', 'Hardware'),".
"('Forging Specialties', '1088 Pinehurst St', 588917, 'Abdallah', '2016-11-27 09:27:25', 'Health'),".
"('Franklin, Peter L Esq', '74 S Westgate St', 932582, 'Royster', '2016-11-27 09:27:25', 'Software'),".
"('Franz Inc', '57254 Brickell Ave #372', 165194, 'Treston', '2016-11-27 09:27:25', 'Software'),".
"('Freehold Fence Co', '2 S 15th St', 704045, 'Tomasulo', '2016-11-27 09:27:25', 'Health'),".
"('Fresno Tile Center Inc', '21575 S Apple Creek Rd', 12988, 'Kardas', '2016-11-27 09:27:25', 'Software'),".
"('Galaxy International Inc', '3 Lawton St', 600788, 'Daufeldt', '2016-11-27 09:27:25', 'Hardware'),".
"('Garofani, John Esq', '87393 E Highland Rd', 492494, 'Dopico', '2016-11-27 09:27:25', 'Hardware'),".
"('Garrison Ind', '31 Douglas Blvd #950', 875081, 'Chickering', '2016-11-27 09:27:25', 'Health'),".
"('Garrison, Paul E Esq', '2 S Biscayne Blvd', 200844, 'Ogg', '2016-11-27 09:27:25', 'Software'),".
"('Gehring Pumps Inc', '187 Market St', 443882, 'Wide', '2016-11-27 09:27:25', 'Software'),".
"('General Foam Corporation', '596 Santa Maria Ave #7913', 209104, 'Perigo', '2016-11-27 09:27:25', 'Software'),".
"('Geonex Martel Inc', '94 W Dodge Rd', 750987, 'Stoltzman', '2016-11-27 09:27:25', 'Software'),".
"('George Jessop Carter Jewelers', '2664 Lewis Rd', 427196, 'Lindall', '2016-11-27 09:27:25', 'Software'),".
"('Germer And Gertz Llp', '61047 Mayfield Ave', 88295, 'Shadrick', '2016-11-27 09:27:25', 'Hardware'),".
"('Gersh & Danielson', '11360 S Halsted St', 525159, 'Perruzza', '2016-11-27 09:27:25', 'Goverment'),".
"('Giampetro, Anthony D', '4 Ralph Ct', 318531, 'Glick', '2016-11-27 09:27:25', 'Health'),".
"('Glenridge Manor Mobile Home Pk', '201 Ridgewood Rd', 34381, 'Brucato', '2016-11-27 09:27:25', 'Software'),".
"('Goeman Wood Products Inc', '8139 I Hwy 10 #92', 299343, 'Halsey', '2016-11-27 09:27:25', 'Hardware'),".
"('Google', '1600 Amphitheatre Pkwy, Mountain View, CA, 94043 USA', 10000, 'Larry Page', '0000-00-00 00:00:00', 'Software'),".
"('Goulds Pumps Inc Slurry Pump', '1 Midway Rd', 308442, 'Brossart', '2016-11-27 09:27:25', 'Health'),".
"('Grace Pastries Inc', '38938 Park Blvd', 54545, 'Briddick', '2016-11-27 09:27:25', 'Hardware'),".
"('Grant Family Health Center', '94 Chase Rd', 295047, 'Syrop', '2016-11-27 09:27:25', 'Hardware'),".
"('Gray, Francine H Esq', '36 Lancaster Dr Se', 32741, 'Miro', '2016-11-27 09:27:25', 'Software'),".
"('Grayson, Grant S Esq', '22 Bridle Ln', 378490, 'Sweely', '2016-11-27 09:27:25', 'Software'),".
"('Green Goddess', '4 10th St W', 74726, 'Cork', '2016-11-27 09:27:25', 'Goverment'),".
"('Griswold, John E Esq', '29 Cherry St #7073', 348464, 'Berray', '2016-11-27 09:27:25', 'Health'),".
"('H A C Farm Lines Co Optv Assoc', '2845 Boulder Crescent St', 818757, 'Vonasek', '2016-11-27 09:27:25', 'Health'),".
"('H H H Enterprises Inc', '3305 Nabell Ave #679', 906538, 'Buvens', '2016-11-27 09:27:25', 'Hardware'),".
"('H Lee Leonard Attorney At Law', '20932 Hedley St', 863846, 'Rhymes', '2016-11-27 09:27:25', 'Hardware'),".
"('H P G Industrys Inc', '3125 Packer Ave #9851', 363855, 'Bilden', '2016-11-27 09:27:25', 'Software'),".
"('Haavisto, Brian F Esq', '3211 E Northeast Loop', 39857, 'Regusters', '2016-11-27 09:27:25', 'Hardware'),".
"('Haber, George D Md', '82 N Highway 67', 233755, 'Hiatt', '2016-11-27 09:27:25', 'Goverment'),".
"('Haehnel, Craig W Esq', '94290 S Buchanan St', 284803, 'Dorshorst', '2016-11-27 09:27:25', 'Software'),".
"('Hammill Mfg Co', '1 Garfield Ave #7', 579980, 'Karpel', '2016-11-27 09:27:25', 'Software'),".
"('Harris Corporation', '4 Iwaena St', 248687, 'Jayson', '2016-11-27 09:27:25', 'Hardware'),".
"('Hasting, H Duane Esq', '88 15th Ave Ne', 578121, 'Herritt', '2016-11-27 09:27:25', 'Software'),".
"('Haughey, Charles Jr', '105 Richmond Valley Rd', 738609, 'Heimann', '2016-11-27 09:27:25', 'Software'),".
"('Hawaiian King Hotel', '18 Fountain St', 359186, 'Weight', '2016-11-27 09:27:25', 'Software'),".
"('Hawkes, Douglas D', '4 Stovall St #72', 146214, 'Lapage', '2016-11-27 09:27:25', 'Hardware'),".
"('Healy, George W Iv', '14302 Pennsylvania Ave', 534603, 'Juhas', '2016-11-27 09:27:25', 'Software'),".
"('Helderman, Seymour Cpa', '5 Williams St', 788012, 'Julia', '2016-11-27 09:27:25', 'Software'),".
"('Henry County Middle School', '9 N 14th St', 116795, 'Sturiale', '2016-11-27 09:27:25', 'Software'),".
"('Hermar Inc', '2 Sw Nyberg Rd', 292708, 'Kampa', '2016-11-27 09:27:25', 'Software'),".
"('Hiram, Hogg P Esq', '85092 Southern Blvd', 432126, 'Martabano', '2016-11-27 09:27:25', 'Hardware'),".
"('Hispanic Magazine', '7667 S Hulen St #42', 817116, 'Bergesen', '2016-11-27 09:27:25', 'Software'),".
"('History Division Of State', '51120 State Route 18', 268263, 'Weglarz', '2016-11-27 09:27:25', 'Software'),".
"('Holiday Inn Naperville', '2094 Montour Blvd', 672123, 'Maile', '2016-11-27 09:27:25', 'Hardware'),".
"('Holmes, Armstead J Esq', '5 Elmwood Park Blvd', 597810, 'Gobern', '2016-11-27 09:27:25', 'Goverment'),".
"('Honey Bee Breeding Genetics &', '9387 Charcot Ave', 869500, 'Manno', '2016-11-27 09:27:25', 'Health'),".
"('Hubbard, Bruce Esq', '53075 Sw 152nd Ter #615', 834076, 'Vanausdal', '2016-11-27 09:27:25', 'Software'),".
"('Hunter, John J Esq', '33 State St', 288607, 'Scriven', '2016-11-27 09:27:25', 'Hardware'),".
"('Icn Pharmaceuticals Inc', '3338 A Lockport Pl #6', 955733, 'Tillotson', '2016-11-27 09:27:25', 'Hardware'),".
"('Ikg Borden Divsn Harsco Corp', '3829 Ventura Blvd', 826109, 'Brachle', '2016-11-27 09:27:25', 'Hardware'),".
"('In Travel Agency', '64 Newman Springs Rd E', 976148, 'Buzick', '2016-11-27 09:27:25', 'Software'),".
"('Industrial Paper Shredders Inc', '64 5th Ave #1153', 683234, 'Centini', '2016-11-27 09:27:25', 'Hardware'),".
"('Ingalls, Donald R Esq', '618 W Yakima Ave', 508105, 'Kolmetz', '2016-11-27 09:27:25', 'Software'),".
"('Inner Label', '67 Rv Cent', 157806, 'Gillaspie', '2016-11-27 09:27:25', 'Software'),".
"('Insty Prints', '3381 E 40th Ave', 392579, 'Mauson', '2016-11-27 09:27:25', 'Goverment'),".
"('Intermed Inc', '4119 Metropolitan Dr', 299773, 'Samara', '2016-11-27 09:27:25', 'Hardware'),".
"('International Eyelets Inc', '7219 Woodfield Rd', 597774, 'Oldroyd', '2016-11-27 09:27:25', 'Goverment'),".
"('Irving Foot Center', '2 W Mount Royal Ave', 769150, 'Nunlee', '2016-11-27 09:27:25', 'Health'),".
"('Italian Express Franchise Corp', '5 Green Pond Rd #4', 494298, 'Keetch', '2016-11-27 09:27:25', 'Hardware'),".
"('J & F Lumber', '77 Massillon Rd #822', 830972, 'Zurcher', '2016-11-27 09:27:25', 'Goverment'),".
"('J M Custom Design Millwork', '2 Flynn Rd', 2142, 'Ketelsen', '2016-11-27 09:27:25', 'Health'),".
"('Jackson Millwork Co', '39 Franklin Ave', 825723, 'Hoopengardner', '2016-11-27 09:27:25', 'Software'),".
"('Jackson Shields Yeiser', '7 Benton Dr', 434848, 'Callaro', '2016-11-27 09:27:25', 'Goverment'),".
"('Jacobs & Gerber Inc', '4 S Washington Ave', 961725, 'Onofrio', '2016-11-27 09:27:25', 'Goverment'),".
"('Jeanerette Middle School', '70099 E North Ave', 596044, 'Turinetti', '2016-11-27 09:27:25', 'Software'),".
"('Jets Cybernetics', '99586 Main St', 914654, 'Blunk', '2016-11-27 09:27:25', 'Software'),".
"('Jewel My Shop Inc', '4800 Black Horse Pike', 383679, 'Wardrip', '2016-11-27 09:27:25', 'Hardware'),".
"('John Hancock Mutl Life Ins Co', '1 N San Saba', 135561, 'Rowling', '2016-11-27 09:27:25', 'Health'),".
"('John Ortiz Nts Therapy Center', '598 43rd St', 585998, 'Beech', '2016-11-27 09:27:25', 'Software'),".
"('John Wagner Associates', '759 Eldora St', 693134, 'Haufler', '2016-11-27 09:27:25', 'Hardware'),".
"('Johnson, Robert M Esq', '53 W Carey St', 259037, 'Ventura', '2016-11-27 09:27:25', 'Health'),".
"('Johnson, Wes Esq', '62 Monroe St', 972978, 'Similton', '2016-11-27 09:27:25', 'Hardware'),".
"('Judah Caster & Wheel Co', '721 Interstate 45 S', 84836, 'Bachman', '2016-11-27 09:27:25', 'Health'),".
"('Juno Chefs Incorporated', '2 Se 3rd Ave', 257872, 'Kownacki', '2016-11-27 09:27:25', 'Software'),".
"('Juvenile & Adult Super', '97 Airport Loop Dr', 176683, 'Melnyk', '2016-11-27 09:27:25', 'Hardware'),".
"('K Cs Cstm Mouldings Windows', '5161 Dorsett Rd', 280296, 'Schmierer', '2016-11-27 09:27:25', 'Hardware'),".
"('Kaminski, Katherine Andritsaki', '47857 Coney Island Ave', 249345, 'Timenez', '2016-11-27 09:27:25', 'Goverment'),".
"('Kansas City Insurance Report', '77132 Coon Rapids Blvd Nw', 197252, 'Modzelewski', '2016-11-27 09:27:25', 'Health'),".
"('Kaplan, Joel S Esq', '27846 Lafayette Ave', 753195, 'Sarao', '2016-11-27 09:27:25', 'Software'),".
"('Kbor 1600 Am', '395 S 6th St #2', 30746, 'Zepp', '2016-11-27 09:27:25', 'Software'),".
"('Kellermann, William T Esq', '383 Gunderman Rd #197', 191158, 'Gochal', '2016-11-27 09:27:25', 'Hardware'),".
"('Kelly, Charles G Esq', '7140 University Ave', 677952, 'Fern', '2016-11-27 09:27:25', 'Software'),".
"('Ken Jeter Store Equipment Inc', '10759 Main St', 363745, 'Kannady', '2016-11-27 09:27:25', 'Hardware'),".
"('Kentucky Tennessee Clay Co', '2409 Alabama Rd', 224288, 'Zane', '2016-11-27 09:27:25', 'Hardware'),".
"('Killion Industries', '7 W 32nd St', 537824, 'Morocco', '2016-11-27 09:27:25', 'Hardware'),".
"('King, Christopher A Esq', '228 Runamuck Pl #2808', 452980, 'Marrier', '2016-11-27 09:27:25', 'Health'),".
"('Kleensteel', '3989 Portage Tr', 823644, 'Lother', '2016-11-27 09:27:25', 'Hardware'),".
"('Kleri, Patricia S Esq', '42744 Hamann Industrial Pky #82', 188954, 'Restrepo', '2016-11-27 09:27:25', 'Health'),".
"('Knights Inn', '762 S Main St', 100135, 'Bowley', '2016-11-27 09:27:25', 'Software'),".
"('Knwz Newsradio', '45 E Liberty St', 627199, 'Stenseth', '2016-11-27 09:27:25', 'Health'),".
"('Kummerer, J Michael Esq', '251 Park Ave #979', 828678, 'Sayaphon', '2016-11-27 09:27:25', 'Goverment'),".
"('Kwik Kopy Printing', '9635 S Main St', 854174, 'Hidvegi', '2016-11-27 09:27:25', 'Health'),".
"('Kwikprint', '9 Front St', 243921, 'Hixenbaugh', '2016-11-27 09:27:25', 'Health'),".
"('Lane Promotions', '9648 S Main', 308126, 'Maisto', '2016-11-27 09:27:25', 'Hardware'),".
"('Larkfield Photo', '944 Gaither Dr', 529418, 'Cloney', '2016-11-27 09:27:25', 'Software'),".
"('Ledecky, David Esq', '1 Central Ave', 806129, 'Iturbide', '2016-11-27 09:27:25', 'Hardware'),".
"('Lee Kilkelly Paulson & Kabaker', '9581 E Arapahoe Rd', 246098, 'Labreche', '2016-11-27 09:27:25', 'Hardware'),".
"('Legal Search Inc', '539 Coldwater Canyon Ave', 699594, 'Feichtner', '2016-11-27 09:27:25', 'Health'),".
"('Lehigh Furn Divsn Lehigh', '6651 Municipal Rd', 1442, 'Gudroe', '2016-11-27 09:27:25', 'Hardware'),".
"('Leonards Antiques Inc', '6 S Broadway St', 758254, 'Brideau', '2016-11-27 09:27:25', 'Hardware'),".
"('Levinson Axelrod Wheaton', '1 Washington St', 258454, 'Leinenbach', '2016-11-27 09:27:25', 'Hardware'),".
"('Linguistic Systems Inc', '506 S Hacienda Dr', 114298, 'Fritz', '2016-11-27 09:27:25', 'Software'),".
"('Linhares, Kenneth A Esq', '5 Cabot Rd', 360052, 'Wolny', '2016-11-27 09:27:25', 'Health'),".
"('Linkedin', '1 Mountain View', 23242, 'Jeff Weiner', '2000-01-12 01:02:23', 'Software'),".
"('Lippitt, Mike', '8 Sheridan Rd', 679101, 'Halter', '2016-11-27 09:27:25', 'Health'),".
"('Lisatoni, Jean Esq', '2 W Scyene Rd #3', 626305, 'Dewar', '2016-11-27 09:27:25', 'Software'),".
"('Little Sheet Metal Co', '75684 S Withlapopka Dr #32', 804757, 'Mai', '2016-11-27 09:27:25', 'Software'),".
"('Local Office', '4 Carroll St', 27877, 'Loder', '2016-11-27 09:27:25', 'Health'),".
"('Logan Memorial Hospital', '55 Riverside Ave', 436850, 'Hochard', '2016-11-27 09:27:25', 'Hardware'),".
"('Logan, Ronald J Esq', '772 W River Dr', 380045, 'Bennick', '2016-11-27 09:27:25', 'Software'),".
"('Longo, Nicholas J Esq', '8 Fair Lawn Ave', 977210, 'Worlds', '2016-11-27 09:27:25', 'Software'),".
"('Lowy Limousine Service', '98839 Hawthorne Blvd #6101', 853514, 'Uyetake', '2016-11-27 09:27:25', 'Health'),".
"('Ludcke, George O Esq', '9 Church St', 210671, 'Scheyer', '2016-11-27 09:27:25', 'Software'),".
"('M & M Store Fixtures Co Inc', '89 20th St E #779', 515398, 'Lukasik', '2016-11-27 09:27:25', 'Software'),".
"('Maccani & Delp', '75698 N Fiesta Blvd', 143599, 'Eanes', '2016-11-27 09:27:25', 'Health'),".
"('Magnuson', '55 Hawthorne Blvd', 169412, 'Konopacki', '2016-11-27 09:27:25', 'Health'),".
"('Maiden Craft Inc', '3424 29th St Se', 24116, 'Keener', '2016-11-27 09:27:25', 'Hardware'),".
"('Mark Ii Imports Inc', '7 S Beverly Dr', 499561, 'Zagen', '2016-11-27 09:27:25', 'Health'),".
"('Mark Iv Press Ltd', '4284 Dorigo Ln', 814242, 'Toelkes', '2016-11-27 09:27:25', 'Goverment'),".
"('Marking Devices Pubg Co', '64 Lakeview Ave', 13177, 'Samu', '2016-11-27 09:27:25', 'Software'),".
"('Marriott Hotels Resorts Suites', '5 Harrison Rd', 494723, 'Agramonte', '2016-11-27 09:27:25', 'Hardware'),".
"('Matricciani, Albert J Jr', '8597 W National Ave', 454562, 'Lary', '2016-11-27 09:27:25', 'Software'),".
"('Maui Research & Technology Pk', '61304 N French Rd', 869948, 'Sweigard', '2016-11-27 09:27:25', 'Health'),".
"('Mayar Silk Inc', '99 5th Ave #33', 248929, 'Ragel', '2016-11-27 09:27:25', 'Hardware'),".
"('Mcauley Mfg Co', '2972 Lafayette Ave', 781792, 'Bevelacqua', '2016-11-27 09:27:25', 'Hardware'),".
"('Mccaleb, John A Esq', '62 W Austin St', 451197, 'Bourbon', '2016-11-27 09:27:25', 'Goverment'),".
"('Mccorkle, Tom S Esq', '9939 N 14th St', 106713, 'Poullion', '2016-11-27 09:27:25', 'Software'),".
"('Mccoy, Joy Reynolds Esq', '92899 Kalakaua Ave', 450765, 'Ehmann', '2016-11-27 09:27:25', 'Software'),".
"('Mcglynn Bliss Pc', '8116 Mount Vernon Ave', 813172, 'Estell', '2016-11-27 09:27:25', 'Hardware'),".
"('Mcgraths Seafood', '5 E Truman Rd', 949641, 'Schieler', '2016-11-27 09:27:25', 'Software'),".
"('Mclaughlin, Luther W Cpa', '1747 Calle Amanecer #2', 220953, 'Giguere', '2016-11-27 09:27:25', 'Hardware'),".
"('Mcrae, James L', '63517 Dupont St', 803352, 'Chavous', '2016-11-27 09:27:25', 'Software'),".
"('Meca', '6 Harry L Dr #6327', 187094, 'Varriano', '2016-11-27 09:27:25', 'Health'),".
"('Megibow & Edwards', '4 Bloomfield Ave', 199989, 'Gellinger', '2016-11-27 09:27:25', 'Software'),".
"('Merlin Electric Co', '9 Norristown Rd', 706921, 'Demesa', '2016-11-27 09:27:25', 'Hardware'),".
"('Merrill Lynch', '3 N Groesbeck Hwy', 736046, 'Plumer', '2016-11-27 09:27:25', 'Software'),".
"('Metlab Testing Services', '8739 Hudson St', 973179, 'Bartolet', '2016-11-27 09:27:25', 'Hardware'),".
"('Microsoft', 'One Microsoft Way, Redmond, WA, 98052 USA', 10000, 'Bill Gates', '0000-00-00 00:00:00', 'Software'),".
"('Mid Contntl Rlty & Prop Mgmt', '8100 Jacksonville Rd #7', 211552, 'Duenas', '2016-11-27 09:27:25', 'Health'),".
"('Midas Muffler Shops', '57 Haven Ave #90', 740405, 'Kippley', '2016-11-27 09:27:25', 'Hardware'),".
"('Midwest Contracting & Mfg Inc', '18 Coronado Ave #563', 328286, 'Schmaltz', '2016-11-27 09:27:25', 'Health'),".
"('Mike Uchrin Htg & Air Cond Inc', '70295 Pioneer Ct', 75812, 'Yaw', '2016-11-27 09:27:25', 'Goverment'),".
"('Milford Enterprises Inc', '2742 Distribution Way', 480162, 'Sergi', '2016-11-27 09:27:25', 'Software'),".
"('Millers Market & Deli', '649 Tulane Ave', 874041, 'Ryser', '2016-11-27 09:27:25', 'Goverment'),".
"('Minor, Cynthia A Esq', '41 Steel Ct', 752580, 'Butzen', '2016-11-27 09:27:25', 'Goverment'),".
"('Mitsumi Electronics Corp', '9677 Commerce Dr', 936119, 'Lacovara', '2016-11-27 09:27:25', 'Software'),".
"('Moapa Valley Federal Credit Un', '61 13 Stoneridge #835', 990222, 'Wiklund', '2016-11-27 09:27:25', 'Software'),".
"('Morgan Custom Homes', '20113 4th Ave E', 982463, 'Paskin', '2016-11-27 09:27:25', 'Software'),".
"('Morlong Associates', '7 Eads St', 93007, 'Tollner', '2016-11-27 09:27:25', 'Software'),".
"('Moskowitz, Barry S', '74874 Atlantic Ave', 805797, 'Corrio', '2016-11-27 09:27:25', 'Software'),".
"('Mosocco, Ronald A', '426 Wolf St', 176473, 'Shinko', '2016-11-27 09:27:25', 'Hardware'),".
"('Museum Of Science & Industry', '6794 Lake Dr E', 854325, 'Lipke', '2016-11-27 09:27:25', 'Software'),".
"('Mutual Fish Co', '8772 Old County Rd #5410', 615884, 'Heintzman', '2016-11-27 09:27:25', 'Health'),".
"('Nagle, Daniel J Esq', '44 58th St', 519914, 'Fallick', '2016-11-27 09:27:25', 'Software'),".
"('National Medical Excess Corp', '49 N Mays St', 611985, 'Amyot', '2016-11-27 09:27:25', 'Health'),".
"('Nazette Marner Good Wendt', '72 Southern Blvd', 283052, 'Ohms', '2016-11-27 09:27:25', 'Software'),".
"('Neeley, Gregory W Esq', '4 E Colonial Dr', 53456, 'Upthegrove', '2016-11-27 09:27:25', 'Goverment'),".
"('Neland Travel Agency', '65 W Maple Ave', 892636, 'Spickerman', '2016-11-27 09:27:25', 'Software'),".
"('Nelson Hawaiian Ltd', '6 Gilson St', 370017, 'Isaacs', '2016-11-27 09:27:25', 'Software'),".
"('Nelson, Karolyn King Esq', '134 Lewis Rd', 933337, 'Kohnert', '2016-11-27 09:27:25', 'Hardware'),".
"('Nercon Engineering & Mfg Inc', '47939 Porter Ave', 864286, 'Skursky', '2016-11-27 09:27:25', 'Software'),".
"('New England Sec Equip Co Inc', '9 Hwy', 473148, 'Lorens', '2016-11-27 09:27:25', 'Software'),".
"('New England Taxidermy', '3 Elmwood Dr', 862313, 'Karpin', '2016-11-27 09:27:25', 'Health'),".
"('New York Life John Thune', '92 Main St', 72411, 'Haroldson', '2016-11-27 09:27:25', 'Software'),".
"('New York Public Library', '18 3rd Ave', 812545, 'Chaffins', '2016-11-27 09:27:25', 'Hardware'),".
"('Newhart Foods Inc', '48 Stratford Ave', 259382, 'Ferrario', '2016-11-27 09:27:25', 'Hardware'),".
"('Newtec Inc', '1 Huntwood Ave', 320447, 'Parvis', '2016-11-27 09:27:25', 'Software'),".
"('Ninas Indian Grs & Videos', '627 Walford Ave', 16516, 'Hagele', '2016-11-27 09:27:25', 'Software'),".
"('Nischwitz, Jeffrey L Esq', '4671 Alemany Blvd', 47682, 'Lawler', '2016-11-27 09:27:25', 'Hardware'),".
"('Nordic Group Inc', '92 Broadway', 70913, 'Rhoden', '2016-11-27 09:27:25', 'Goverment'),".
"('North Central Fl Sfty Cncl', '2184 Worth St', 596731, 'Jacobos', '2016-11-27 09:27:25', 'Hardware'),".
"('Northwest Publishing', '4545 Courthouse Rd', 867650, 'Wenner', '2016-11-27 09:27:25', 'Software'),".
"('Oh My Goodknits Inc', '455 N Main Ave', 782384, 'Pawlowicz', '2016-11-27 09:27:25', 'Hardware'),".
"('Olsen Payne & Company', '6 Ridgewood Center Dr', 603394, 'Asar', '2016-11-27 09:27:25', 'Software'),".
"('Olympic Graphic Arts', '4379 Highway 116', 899282, 'Emard', '2016-11-27 09:27:25', 'Goverment'),".
"('One Day Surgery Center Inc', '34 Raritan Center Pky', 830646, 'Tomblin', '2016-11-27 09:27:25', 'Hardware'),".
"('Opryland Hotel', '1 Commerce Way', 235210, 'Felger', '2016-11-27 09:27:25', 'Hardware'),".
"('Orinda News', '4486 W O St #1', 628518, 'Bolognia', '2016-11-27 09:27:25', 'Hardware'),".
"('Osborne, Michelle M Esq', '63728 Poway Rd #1', 523067, 'Drymon', '2016-11-27 09:27:25', 'Hardware'),".
"('Oshins & Gibbons', '985 E 6th Ave', 978571, 'Hamilton', '2016-11-27 09:27:25', 'Software'),".
"('Pacific Grove Museum Ntrl Hist', '524 Louisiana Ave Nw', 347360, 'Cronauer', '2016-11-27 09:27:25', 'Goverment'),".
"('Pagano, Philip G Esq', '8 S Haven St', 289853, 'Oles', '2016-11-27 09:27:25', 'Software'),".
"('Panasystems', '9 N College Ave #3', 583758, 'Weirather', '2016-11-27 09:27:25', 'Hardware'),".
"('Papay, Debbie J Esq', '5221 Bear Valley Rd', 313884, 'Good', '2016-11-27 09:27:25', 'Software'),".
"('Parkway Company', '17 Morena Blvd', 137948, 'Ostrosky', '2016-11-27 09:27:25', 'Software'),".
"('Payne Blades & Wellborn Pa', '98 University Dr', 82161, 'Montezuma', '2016-11-27 09:27:25', 'Goverment'),".
"('Peace Christian Center', '3732 Sherman Ave', 928388, 'Stimmel', '2016-11-27 09:27:25', 'Hardware'),".
"('Perez, Joseph J Esq', '37855 Nolan Rd', 986140, 'Hanafan', '2016-11-27 09:27:25', 'Health'),".
"('Petersen, James E Esq', '6535 Joyce St', 527827, 'Bubash', '2016-11-27 09:27:25', 'Software'),".
"('Plantation Restaurant', '8977 Connecticut Ave Nw #3', 287731, 'Aquas', '2016-11-27 09:27:25', 'Software'),".
"('Poletto, Kim David Esq', '12270 Caton Center Dr', 380347, 'Batman', '2016-11-27 09:27:25', 'Software'),".
"('Polykote Inc', '2026 N Plankinton Ave #3', 25115, 'Gesick', '2016-11-27 09:27:25', 'Health'),".
"('Portland Central Thriftlodge', '9 Tower Ave', 623233, 'Myricks', '2016-11-27 09:27:25', 'Hardware'),".
"('Porto Cayo At Hawks Cay', '4 Webbs Chapel Rd', 850108, 'Buemi', '2016-11-27 09:27:25', 'Hardware'),".
"('Post Box Services Plus', '394 Manchester Blvd', 644416, 'Flosi', '2016-11-27 09:27:25', 'Health'),".
"('Potter, Brenda J Cpa', '97 E 3rd St #9', 875522, 'Louissant', '2016-11-27 09:27:25', 'Health'),".
"('Price Business Services', '7 West Ave #1', 377440, 'Acey', '2016-11-27 09:27:25', 'Health'),".
"('Print Doctor', '72 Beechwood Ter', 837908, 'Meteer', '2016-11-27 09:27:25', 'Software'),".
"('Printing Dimensions', '34 Center St', 922696, 'Foller', '2016-11-27 09:27:25', 'Hardware'),".
"('Printing Images Corp', '36 Enterprise St Se', 951295, 'Pagliuca', '2016-11-27 09:27:25', 'Hardware'),".
"('Private Properties', '74 W College St', 537841, 'Mondella', '2016-11-27 09:27:25', 'Hardware'),".
"('Professional Image Inc', '86 Nw 66th St #8673', 594657, 'Caudy', '2016-11-27 09:27:25', 'Health'),".
"('Professionals Unlimited', '66697 Park Pl #3224', 310893, 'Burnard', '2016-11-27 09:27:25', 'Goverment'),".
"('Prohab Rehabilitation Servs', '481 W Lemon St', 659326, 'Corrington', '2016-11-27 09:27:25', 'Software'),".
"('Publishers Group West', '99 Tank Farm Rd', 951492, 'Ennaco', '2016-11-27 09:27:25', 'Hardware'),".
"('Q A Service', '6 Kains Ave', 81905, 'Reitler', '2016-11-27 09:27:25', 'Software'),".
"('Quality Inn Northwest', '9506 Edgemore Ave', 994147, 'Gwalthney', '2016-11-27 09:27:25', 'Hardware'),".
"('Radio Communications Co', '9 Waydell St', 511268, 'Tjepkema', '2016-11-27 09:27:25', 'Software'),".
"('Rangoni Of Florence', '37275 St  Rt 17m M', 137127, 'Maclead', '2016-11-27 09:27:25', 'Software'),".
"('Rapid Trading Intl', '1048 Main St', 721786, 'Campain', '2016-11-27 09:27:25', 'Hardware'),".
"('Ravaal Enterprises Inc', '3158 Runamuck Pl', 533270, 'Discipio', '2016-11-27 09:27:25', 'Goverment'),".
"('Ray Carolyne Realty', '84 Bloomfield Ave', 688330, 'Coody', '2016-11-27 09:27:25', 'Hardware'),".
"('Ray, Milbern D', '6 Van Buren St', 651819, 'Wrinkles', '2016-11-27 09:27:25', 'Health'),".
"('Redeker, Debbie', '1844 Southern Blvd', 77138, 'Deleo', '2016-11-27 09:27:25', 'Health'),".
"('Reese Plastics', '2 W Beverly Blvd', 971325, 'Angalich', '2016-11-27 09:27:25', 'Hardware'),".
"('Remaco Inc', '73 Southern Blvd', 475269, 'Caiafa', '2016-11-27 09:27:25', 'Hardware'),".
"('Replica I', '9 Wales Rd Ne #914', 454018, 'Skulski', '2016-11-27 09:27:25', 'Hardware'),".
"('Reuter, Arthur C Jr', '34 Saint George Ave #2', 964866, 'Schirpke', '2016-11-27 09:27:25', 'Software'),".
"('Riley Riper Hollin & Colagreco', '9 W Central Ave', 651948, 'Sengbusch', '2016-11-27 09:27:25', 'Software'),".
"('Roberts Supply Co Inc', '8429 Miller Rd', 251900, 'Frerking', '2016-11-27 09:27:25', 'Software'),".
"('Robinson, William J Esq', '2853 S Central Expy', 39470, 'Eroman', '2016-11-27 09:27:25', 'Hardware'),".
"('Rodeway Inn', '25 Minters Chapel Rd #9', 837375, 'Fillingim', '2016-11-27 09:27:25', 'Goverment'),".
"('Rodriguez, J Christopher Esq', '7422 Martin Ave #8', 685976, 'Stuer', '2016-11-27 09:27:25', 'Software'),".
"('Roland Ashcroft', '87 Sierra Rd', 900234, 'Frankel', '2016-11-27 09:27:25', 'Software'),".
"('Rossi, Michael M', '76 Brooks St #9', 52273, 'Klonowski', '2016-11-27 09:27:25', 'Health'),".
"('Rousseaux, Michael Esq', '56 E Morehead St', 203107, 'Albares', '2016-11-27 09:27:25', 'Software'),".
"('Rowley Schlimgen Inc', '701 S Harrison Rd', 890167, 'Blackwood', '2016-11-27 09:27:25', 'Hardware'),".
"('Royal Pontiac Olds Inc', '9 Murfreesboro Rd', 333829, 'Cookey', '2016-11-27 09:27:25', 'Hardware'),".
"('Saint George Well Drilling', '82 Us Highway 46', 198314, 'Greenbush', '2016-11-27 09:27:25', 'Software'),".
"('Sameshima, Douglas J Esq', '910 Rahway Ave', 399884, 'Schoeneck', '2016-11-27 09:27:25', 'Goverment'),".
"('Sammys Steak Den', '16452 Greenwich St', 696994, 'Liukko', '2016-11-27 09:27:25', 'Goverment'),".
"('Sampler', '555 Main St', 472122, 'Miceli', '2016-11-27 09:27:25', 'Software'),".
"('Sams Corner Store', '9122 Carpenter Ave', 151897, 'Fishburne', '2016-11-27 09:27:25', 'Health'),".
"('Santa Cruz Community Internet', '63 Smith Ln #8343', 959255, 'Villanueva', '2016-11-27 09:27:25', 'Software'),".
"('Saronix Nymph Products', '44 W 4th St', 55192, 'Mulqueen', '2016-11-27 09:27:25', 'Hardware'),".
"('Sat Poly Inc', '2 W Grand Ave', 350123, 'Rodefer', '2016-11-27 09:27:25', 'Software'),".
"('Scat Enterprises', '73 Saint Ann St #86', 703798, 'Hoa', '2016-11-27 09:27:25', 'Hardware'),".
"('Schmid, Gayanne K Esq', '137 Pioneer Way', 252365, 'Klimek', '2016-11-27 09:27:25', 'Hardware'),".
"('Schoen, Edward J Jr', '3943 N Highland Ave', 529594, 'Flister', '2016-11-27 09:27:25', 'Software'),".
"('Schott Fiber Optics Inc', '96950 Hidden Ln', 19656, 'Coyier', '2016-11-27 09:27:25', 'Software'),".
"('Schroer, Gene E Esq', '5 Tomahawk Dr', 829227, 'Waycott', '2016-11-27 09:27:25', 'Hardware'),".
"('Schultz, Thomas C Md', '59 Shady Ln #53', 478966, 'Yglesias', '2016-11-27 09:27:25', 'Hardware'),".
"('Sea Island Div Of Fstr Ind Inc', '4 58th St #3519', 305953, 'Nicolozakes', '2016-11-27 09:27:25', 'Hardware'),".
"('Seaboard Securities Inc', '6538 E Pomona St #60', 505687, 'Calvaresi', '2016-11-27 09:27:25', 'Software'),".
"('Seashore Supply Co Waretown', '393 Lafayette Ave', 516840, 'Dallen', '2016-11-27 09:27:25', 'Goverment'),".
"('Sebring & Co', '40 9th Ave Sw #91', 670095, 'Lietz', '2016-11-27 09:27:25', 'Software'),".
"('Sentry Signs', '433 Westminster Blvd #590', 260573, 'Vizarro', '2016-11-27 09:27:25', 'Software'),".
"('Serendiquity Bed & Breakfast', '9745 W Main St', 626407, 'Wolfgramm', '2016-11-27 09:27:25', 'Software'),".
"('Service Supply Co Inc', '735 Crawford Dr', 919188, 'Kitty', '2016-11-27 09:27:25', 'Health'),".
"('Shank, Edward L Esq', '60480 Old Us Highway 51', 832499, 'Jillson', '2016-11-27 09:27:25', 'Software'),".
"('Sharp, J Daniel Esq', '3777 E Richmond St #900', 255337, 'Emigh', '2016-11-27 09:27:25', 'Software'),".
"('Shimotani, Grace T', '88827 Frankford Ave', 750729, 'Koppinger', '2016-11-27 09:27:25', 'Software'),".
"('Sider, Donald C Esq', '2 Cedar Ave #84', 92503, 'Chui', '2016-11-27 09:27:25', 'Health'),".
"('Sidewinder Products Corp', '8573 Lincoln Blvd', 57413, 'Hauenstein', '2016-11-27 09:27:25', 'Health'),".
"('Sigma Corp Of America', '38 Pleasant Hill Rd', 570232, 'Schnitzler', '2016-11-27 09:27:25', 'Hardware'),".
"('Sign All', '38773 Gravois Ave', 143574, 'Delasancha', '2016-11-27 09:27:25', 'Health'),".
"('Silberman, Arthur L Esq', '798 Lund Farm Way', 432935, 'Madarang', '2016-11-27 09:27:25', 'Hardware'),".
"('Silver Bros Inc', '8 Industry Ln', 466562, 'Shealy', '2016-11-27 09:27:25', 'Hardware'),".
"('Silverman Planetarium', '66552 Malone Rd', 200537, 'Riden', '2016-11-27 09:27:25', 'Health'),".
"('Simonton Howe & Schneider Pc', '89992 E 15th St', 181520, 'Bookamer', '2016-11-27 09:27:25', 'Hardware'),".
"('Siskin, Mark J Esq', '48 Lenox St', 144234, 'Moyd', '2016-11-27 09:27:25', 'Hardware'),".
"('Smc Inc', '11279 Loytan St', 374280, 'Honeywell', '2016-11-27 09:27:25', 'Software'),".
"('Smits, Patricia Garity', '30 W 80th St #1995', 600144, 'Rhym', '2016-11-27 09:27:25', 'Goverment'),".
"('Solove, Robert A Esq', '49440 Dearborn St', 11804, 'Colla', '2016-11-27 09:27:25', 'Software'),".
"('Southern Steel Shelving Co', '96263 Greenwood Pl', 248923, 'Setter', '2016-11-27 09:27:25', 'Goverment'),".
"('Soward, Anne Esq', '45 E Acacia Ct', 815127, 'Nievas', '2016-11-27 09:27:25', 'Hardware'),".
"('Spence Law Offices', '2139 Santa Rosa Ave', 392631, 'Patak', '2016-11-27 09:27:25', 'Software'),".
"('Spoor Behrins Campbell & Young', '7061 N 2nd St', 120509, 'Birkner', '2016-11-27 09:27:25', 'Health'),".
"('Sport En Art', '6 S 33rd St', 472288, 'Nicka', '2016-11-27 09:27:25', 'Software'),".
"('Sportmaster Intrnatl', '6 Sunrise Ave', 290512, 'Mclaird', '2016-11-27 09:27:25', 'Health'),".
"('Springfield Div Oh Edison Co', '68556 Central Hwy', 262119, 'Vanheusen', '2016-11-27 09:27:25', 'Goverment'),".
"('Stanley, Richard L Esq', '2726 Charcot Ave', 324769, 'Francescon', '2016-11-27 09:27:25', 'Software'),".
"('Stanton, James D Esq', '2 Lighthouse Ave', 557301, 'Saylors', '2016-11-27 09:27:25', 'Hardware'),".
"('Stephen Kennerly Archts Inc Pc', '7 S San Marcos Rd', 1494, 'Mallett', '2016-11-27 09:27:25', 'Software'),".
"('Stero Company', '993 Washington Ave', 410222, 'Gehrett', '2016-11-27 09:27:25', 'Software'),".
"('Stevens, Charles T', '840 15th Ave', 541307, 'Bruschke', '2016-11-27 09:27:25', 'Software'),".
"('Stoffer, James M Jr', '43496 Commercial Dr #29', 23661, 'Palaia', '2016-11-27 09:27:25', 'Software'),".
"('Stuart J Agins', '3718 S Main St', 853092, 'Rodeigues', '2016-11-27 09:27:25', 'Health'),".
"('Students In Free Entrprs Natl', '77 222 Dr', 339801, 'Scipione', '2016-11-27 09:27:25', 'Health'),".
"('Studer, Eugene A Esq', '87163 N Main Ave', 723477, 'Dhamer', '2016-11-27 09:27:25', 'Software'),".
"('Sublett, Scott Esq', '37 N Elm St #916', 694378, 'Loader', '2016-11-27 09:27:25', 'Software'),".
"('Super 8 Motel', '669 Packerland Dr #1438', 226874, 'Fortino', '2016-11-27 09:27:25', 'Hardware'),".
"('Switchcraft Inc', '4 Nw 12th St #3849', 96494, 'Colaizzo', '2016-11-27 09:27:25', 'Software'),".
"('Systems Graph Inc Ab Dick Dlr', '65 Mountain View Dr', 664343, 'Lipkin', '2016-11-27 09:27:25', 'Hardware'),".
"('T M Byxbee Company Pc', '322 New Horizon Blvd', 594780, 'Rim', '2016-11-27 09:27:25', 'Hardware'),".
"('Targan & Kievit Pa', '1644 Clove Rd', 590186, 'Nayar', '2016-11-27 09:27:25', 'Software'),".
"('Terk, Robert E Esq', '78 Maryland Dr #146', 476498, 'Gleich', '2016-11-27 09:27:25', 'Health'),".
"('Thompson Fabricating Co', '67 E Chestnut Hill Rd', 411381, 'Hellickson', '2016-11-27 09:27:25', 'Goverment'),".
"('Thompson Steel Company Inc', '9 Plainsboro Rd #598', 193052, 'Linahan', '2016-11-27 09:27:25', 'Hardware'),".
"('Thompson, John Randolph Jr', '7 Tarrytown Rd', 574108, 'Witten', '2016-11-27 09:27:25', 'Software'),".
"('Thrifty Oil Co', '5 S Colorado Blvd #449', 332905, 'Engelberg', '2016-11-27 09:27:25', 'Software'),".
"('Tipiak Inc', '80312 W 32nd St', 714559, 'Castros', '2016-11-27 09:27:25', 'Software'),".
"('Tippett, Troy M Ii', '8284 Hart St', 977868, 'Boulter', '2016-11-27 09:27:25', 'Hardware'),".
"('Toledo Iv Care', '2759 Livingston Ave', 17434, 'Slayton', '2016-11-27 09:27:25', 'Goverment'),".
"('Tree Musketeers', '99385 Charity St #840', 578211, 'Benimadho', '2016-11-27 09:27:25', 'Hardware'),".
"('Tri M Tool Inc', '2881 Lewis Rd', 146728, 'Schemmer', '2016-11-27 09:27:25', 'Health'),".
"('Tri State Refueler Co', '128 Bransten Rd', 797148, 'Stockham', '2016-11-27 09:27:25', 'Hardware'),".
"('Truhlar And Truhlar Attys', '5 Boston Ave #88', 388517, 'Wieser', '2016-11-27 09:27:25', 'Software'),".
"('Twiggs Abrams Blanchard', '1950 5th Ave', 246932, 'Kalafatis', '2016-11-27 09:27:25', 'Software'),".
"('Tyee Productions Inc', '3958 S Dupont Hwy #7', 331030, 'Saulter', '2016-11-27 09:27:25', 'Health'),".
"('U Pull It', '90991 Thorburn Ave', 581352, 'Kusko', '2016-11-27 09:27:25', 'Health'),".
"('Ulbrich Trucking', '278 Bayview Ave', 70184, 'Swayze', '2016-11-27 09:27:25', 'Health'),".
"('United Cerebral Palsy Of Ne Pa', '32820 Corkwood Rd', 863734, 'Auber', '2016-11-27 09:27:25', 'Health'),".
"('United Oil Co Inc', '177 S Rider Trl #52', 803697, 'Juvera', '2016-11-27 09:27:25', 'Software'),".
"('United Van Lines Agent', '81 Norris Ave #525', 427462, 'Tolfree', '2016-11-27 09:27:25', 'Hardware'),".
"('Valerie & Company', '1 S Pine St', 935396, 'Paa', '2016-11-27 09:27:25', 'Software'),".
"('Versatile Sash & Woodwork', '747 Leonis Blvd', 762256, 'Tromblay', '2016-11-27 09:27:25', 'Software'),".
"('Vico Products Mfg Co', '5 W 7th St', 653083, 'Tagala', '2016-11-27 09:27:25', 'Health'),".
"('Vicon Corporation', '71 San Mateo Ave', 62140, 'Mastella', '2016-11-27 09:27:25', 'Goverment'),".
"('Video Workshop', '7163 W Clark Rd', 590885, 'Rentfro', '2016-11-27 09:27:25', 'Goverment'),".
"('Vlahos, John J Esq', '4940 Pulaski Park Dr', 353756, 'Gotter', '2016-11-27 09:27:25', 'Software'),".
"('W Tc Industries Inc', '3 Aspen St', 652325, 'Kines', '2016-11-27 09:27:25', 'Hardware'),".
"('W W John Holden Inc', '55713 Lake City Hwy', 118300, 'Jeanty', '2016-11-27 09:27:25', 'Health'),".
"('Wallace Church Assoc Inc', '72119 S Walker Ave #63', 946148, 'Maillard', '2016-11-27 09:27:25', 'Hardware'),".
"('Warehouse Office & Paper Prod', '61556 W 20th Ave', 897796, 'Biddy', '2016-11-27 09:27:25', 'Software'),".
"('Warner Electric Brk & Cltch Co', '13 Gunnison St', 592603, 'Harnos', '2016-11-27 09:27:25', 'Software'),".
"('Water & Sewer Department', '7 Flowers Rd #403', 771176, 'Comnick', '2016-11-27 09:27:25', 'Hardware'),".
"('Water Office', '10276 Brooks St', 77464, 'Mcrae', '2016-11-27 09:27:25', 'Health'),".
"('Wells Kravitz Schnitzer', '30553 Washington Rd', 472475, 'Mirafuentes', '2016-11-27 09:27:25', 'Goverment'),".
"('Wells, D Fred Esq', '79 S Howell Ave', 869099, 'Berlanga', '2016-11-27 09:27:25', 'Health'),".
"('Westbrooks, Nelson E Jr', '1 Century Park E', 307599, 'Lueckenbach', '2016-11-27 09:27:25', 'Software'),".
"('Wheatley Trucking Company', '2500 Pringle Rd Se #508', 686016, 'Galam', '2016-11-27 09:27:25', 'Software'),".
"('Wheaton Plastic Products', '22 Spruce St #595', 659226, 'Wenzinger', '2016-11-27 09:27:25', 'Health'),".
"('White Sign Div Ctrl Equip Co', '919 Wall Blvd', 726776, 'Sahagun', '2016-11-27 09:27:25', 'Health'),".
"('Whitehall Robbins Labs Divsn', '32860 Sierra Rd', 291048, 'Steffensmeier', '2016-11-27 09:27:25', 'Software'),".
"('Windsor, James L Esq', '5 N Cleveland Massillon Rd', 250428, 'Palaspas', '2016-11-27 09:27:25', 'Software'),".
"('Winship & Byrne', '577 Parade St', 217422, 'Pelkowski', '2016-11-27 09:27:25', 'Software'),".
"('Wise, Dennis W Md', '26659 N 13th St', 301925, 'Westerbeck', '2016-11-27 09:27:25', 'Software'),".
"('Wmmt Radio Station', '26 Montgomery St', 154773, 'Monterrubio', '2016-11-27 09:27:25', 'Hardware'),".
"('Wolf, Warren R Esq', '18 Waterloo Geneva Rd', 8545, 'Dinos', '2016-11-27 09:27:25', 'Health'),".
"('Womack & Galich', '2215 Prosperity Dr', 543110, 'Dubaldi', '2016-11-27 09:27:25', 'Goverment'),".
"('Wood & Whitacre Contractors', '47565 W Grand Ave', 518663, 'Crupi', '2016-11-27 09:27:25', 'Software'),".
"('Woodbridge Free Public Library', '54169 N Main St', 801235, 'Frey', '2016-11-27 09:27:25', 'Hardware'),".
"('Wtlz Power 107 Fm', '3273 State St', 305604, 'Slusarski', '2016-11-27 09:27:25', 'Goverment'),".
"('Wye Technologies Inc', '65895 S 16th St', 491379, 'Ahle', '2016-11-27 09:27:25', 'Software'),".
"('Yeates, Arthur L Aia', '868 State St #38', 477462, 'Meisel', '2016-11-27 09:27:25', 'Software'),".
"('Young, Timothy L Esq', '28 S 7th St #2824', 952681, 'Farrow', '2016-11-27 09:27:25', 'Software');",




"INSERT INTO `Employee` (`EmployeeID`, `Name`, `CompanyName`, `Address`, `PhoneNumber`) VALUES".
"(1, 'James Butt', 'Benton, John B Jr', '6649 N Blue Gum St', '504-621-8927'),".
"(2, 'Josephine Darakjy', 'Chanay, Jeffrey A Esq', '4 B Blue Ridge Blvd', '810-292-9388'),".
"(3, 'Art Venere', 'Chemel, James L Cpa', '8 W Cerritos Ave #54', '856-636-8749'),".
"(4, 'Lenna Paprocki', 'Feltz Printing Service', '639 Main St', '907-385-4412'),".
"(5, 'Donette Foller', 'Printing Dimensions', '34 Center St', '513-570-1893'),".
"(6, 'Simona Morasca', 'Chapman, Ross E Esq', '3 Mcauley Dr', '419-503-2484'),".
"(7, 'Mitsue Tollner', 'Morlong Associates', '7 Eads St', '773-573-6914'),".
"(8, 'Leota Dilliard', 'Commercial Press', '7 W Jackson Blvd', '408-752-3500'),".
"(9, 'Sage Wieser', 'Truhlar And Truhlar Attys', '5 Boston Ave #88', '605-414-2147'),".
"(10, 'Kris Marrier', 'King, Christopher A Esq', '228 Runamuck Pl #2808', '410-655-8723'),".
"(11, 'Minna Amigon', 'Dorl, James J Esq', '2371 Jerrold Ave', '215-874-1229'),".
"(12, 'Abel Maclead', 'Rangoni Of Florence', '37275 St  Rt 17m M', '631-335-3414'),".
"(13, 'Kiley Caldarera', 'Feiner Bros', '25 E 75th St #69', '310-498-5651'),".
"(14, 'Graciela Ruta', 'Buckley Miller & Wright', '98 Connecticut Ave Nw', '440-780-8425'),".
"(15, 'Cammy Albares', 'Rousseaux, Michael Esq', '56 E Morehead St', '956-537-6195'),".
"(16, 'Mattie Poquette', 'Century Communications', '73 State Road 434 E', '602-277-4385'),".
"(17, 'Meaghan Garufi', 'Bolton, Wilbur Esq', '69734 E Carrillo St', '931-313-9635'),".
"(18, 'Gladys Rim', 'T M Byxbee Company Pc', '322 New Horizon Blvd', '414-661-9598'),".
"(19, 'Yuki Whobrey', 'Farmers Insurance Group', '1 State Route 27', '313-288-7937'),".
"(20, 'Fletcher Flosi', 'Post Box Services Plus', '394 Manchester Blvd', '815-828-2147'),".
"(21, 'Bette Nicka', 'Sport En Art', '6 S 33rd St', '610-545-3615'),".
"(22, 'Veronika Inouye', 'C 4 Network Inc', '6 Greenleaf Ave', '408-540-1785'),".
"(23, 'Willard Kolmetz', 'Ingalls, Donald R Esq', '618 W Yakima Ave', '972-303-9197'),".
"(24, 'Maryann Royster', 'Franklin, Peter L Esq', '74 S Westgate St', '518-966-7987'),".
"(25, 'Alisha Slusarski', 'Wtlz Power 107 Fm', '3273 State St', '732-658-3154'),".
"(26, 'Allene Iturbide', 'Ledecky, David Esq', '1 Central Ave', '715-662-6764'),".
"(27, 'Chanel Caudy', 'Professional Image Inc', '86 Nw 66th St #8673', '913-388-2079'),".
"(28, 'Ezekiel Chui', 'Sider, Donald C Esq', '2 Cedar Ave #84', '410-669-1642'),".
"(29, 'Willow Kusko', 'U Pull It', '90991 Thorburn Ave', '212-582-4976'),".
"(30, 'Bernardo Figeroa', 'Clark, Richard Cpa', '386 9th Ave N', '936-336-3951'),".
"(31, 'Ammie Corrio', 'Moskowitz, Barry S', '74874 Atlantic Ave', '614-801-9788'),".
"(32, 'Francine Vocelka', 'Cascade Realty Advisors Inc', '366 South Dr', '505-977-3911'),".
"(33, 'Ernie Stenseth', 'Knwz Newsradio', '45 E Liberty St', '201-709-6245'),".
"(34, 'Albina Glick', 'Giampetro, Anthony D', '4 Ralph Ct', '732-924-7882'),".
"(35, 'Alishia Sergi', 'Milford Enterprises Inc', '2742 Distribution Way', '212-860-1579'),".
"(36, 'Solange Shinko', 'Mosocco, Ronald A', '426 Wolf St', '504-979-9175'),".
"(37, 'Jose Stockham', 'Tri State Refueler Co', '128 Bransten Rd', '212-675-8570'),".
"(38, 'Rozella Ostrosky', 'Parkway Company', '17 Morena Blvd', '805-832-6163'),".
"(39, 'Valentine Gillian', 'Fbs Business Finance', '775 W 17th St', '210-812-9597'),".
"(40, 'Kati Rulapaugh', 'Eder Assocs Consltng Engrs Pc', '6980 Dorsett Rd', '785-463-7829'),".
"(41, 'Youlanda Schemmer', 'Tri M Tool Inc', '2881 Lewis Rd', '541-548-8197'),".
"(42, 'Dyan Oldroyd', 'International Eyelets Inc', '7219 Woodfield Rd', '913-413-4604'),".
"(43, 'Roxane Campain', 'Rapid Trading Intl', '1048 Main St', '907-231-4722'),".
"(44, 'Lavera Perin', 'Abc Enterprises Inc', '678 3rd Ave', '305-606-7291'),".
"(45, 'Erick Ferencz', 'Cindy Turner Associates', '20 S Babcock St', '907-741-1044'),".
"(46, 'Fatima Saylors', 'Stanton, James D Esq', '2 Lighthouse Ave', '952-768-2416'),".
"(47, 'Jina Briddick', 'Grace Pastries Inc', '38938 Park Blvd', '617-399-5124'),".
"(48, 'Kanisha Waycott', 'Schroer, Gene E Esq', '5 Tomahawk Dr', '323-453-2780'),".
"(49, 'Emerson Bowley', 'Knights Inn', '762 S Main St', '608-336-7444'),".
"(50, 'Blair Malet', 'Bollinger Mach Shp & Shipyard', '209 Decker Dr', '215-907-9111'),".
"(51, 'Brock Bolognia', 'Orinda News', '4486 W O St #1', '212-402-9216'),".
"(52, 'Lorrie Nestle', 'Ballard Spahr Andrews', '39 S 7th St', '931-875-6644'),".
"(53, 'Sabra Uyetake', 'Lowy Limousine Service', '98839 Hawthorne Blvd #6101', '803-925-5213'),".
"(54, 'Marjory Mastella', 'Vicon Corporation', '71 San Mateo Ave', '610-814-5533'),".
"(55, 'Karl Klonowski', 'Rossi, Michael M', '76 Brooks St #9', '908-877-6135'),".
"(56, 'Tonette Wenner', 'Northwest Publishing', '4545 Courthouse Rd', '516-968-6051'),".
"(57, 'Amber Monarrez', 'Branford Wire & Mfg Co', '14288 Foster Ave #4121', '215-934-8655'),".
"(58, 'Shenika Seewald', 'East Coast Marketing', '4 Otis St', '818-423-4007'),".
"(59, 'Delmy Ahle', 'Wye Technologies Inc', '65895 S 16th St', '401-458-2547'),".
"(60, 'Deeanna Juhas', 'Healy, George W Iv', '14302 Pennsylvania Ave', '215-211-9589'),".
"(61, 'Blondell Pugh', 'Alpenlite Inc', '201 Hawk Ct', '401-960-8259'),".
"(62, 'Jamal Vanausdal', 'Hubbard, Bruce Esq', '53075 Sw 152nd Ter #615', '732-234-1546'),".
"(63, 'Cecily Hollack', 'Arthur A Oliver & Son Inc', '59 N Groesbeck Hwy', '512-486-3817'),".
"(64, 'Carmelina Lindall', 'George Jessop Carter Jewelers', '2664 Lewis Rd', '303-724-7371'),".
"(65, 'Maurine Yglesias', 'Schultz, Thomas C Md', '59 Shady Ln #53', '414-748-1374'),".
"(66, 'Tawna Buvens', 'H H H Enterprises Inc', '3305 Nabell Ave #679', '212-674-9610'),".
"(67, 'Penney Weight', 'Hawaiian King Hotel', '18 Fountain St', '907-797-9628'),".
"(68, 'Elly Morocco', 'Killion Industries', '7 W 32nd St', '814-393-5571'),".
"(69, 'Ilene Eroman', 'Robinson, William J Esq', '2853 S Central Expy', '410-914-9018'),".
"(70, 'Vallie Mondella', 'Private Properties', '74 W College St', '208-862-5339'),".
"(71, 'Kallie Blackwood', 'Rowley Schlimgen Inc', '701 S Harrison Rd', '415-315-2761'),".
"(72, 'Johnetta Abdallah', 'Forging Specialties', '1088 Pinehurst St', '919-225-9345'),".
"(73, 'Bobbye Rhym', 'Smits, Patricia Garity', '30 W 80th St #1995', '650-528-5783'),".
"(74, 'Micaela Rhymes', 'H Lee Leonard Attorney At Law', '20932 Hedley St', '925-647-3298'),".
"(75, 'Tamar Hoogland', 'A K Construction Co', '2737 Pistorio Rd #9230', '740-343-8575'),".
"(76, 'Moon Parlato', 'Ambelang, Jessica M Md', '74989 Brandon St', '585-866-8313'),".
"(77, 'Laurel Reitler', 'Q A Service', '6 Kains Ave', '410-520-4832'),".
"(78, 'Delisa Crupi', 'Wood & Whitacre Contractors', '47565 W Grand Ave', '973-354-2040'),".
"(79, 'Viva Toelkes', 'Mark Iv Press Ltd', '4284 Dorigo Ln', '773-446-5569'),".
"(80, 'Elza Lipke', 'Museum Of Science & Industry', '6794 Lake Dr E', '973-927-3447'),".
"(81, 'Devorah Chickering', 'Garrison Ind', '31 Douglas Blvd #950', '505-975-8559'),".
"(82, 'Timothy Mulqueen', 'Saronix Nymph Products', '44 W 4th St', '718-332-6527'),".
"(83, 'Arlette Honeywell', 'Smc Inc', '11279 Loytan St', '904-775-4480'),".
"(84, 'Dominque Dickerson', 'E A I Electronic Assocs Inc', '69 Marquette Ave', '510-993-3758'),".
"(85, 'Lettie Isenhower', 'Conte, Christopher A Esq', '70 W Main St', '216-657-7668'),".
"(86, 'Myra Munns', 'Anker Law Office', '461 Prospect Pl #316', '817-914-7518'),".
"(87, 'Stephaine Barfield', 'Beutelschies & Company', '47154 Whipple Ave Nw', '310-774-7643'),".
"(88, 'Lai Gato', 'Fligg, Kenneth I Jr', '37 Alabama Ave', '847-728-7286'),".
"(89, 'Stephen Emigh', 'Sharp, J Daniel Esq', '3777 E Richmond St #900', '330-537-5358'),".
"(90, 'Tyra Shields', 'Assink, Anne H Esq', '3 Fort Worth Ave', '215-255-1641'),".
"(91, 'Tammara Wardrip', 'Jewel My Shop Inc', '4800 Black Horse Pike', '650-803-1936'),".
"(92, 'Cory Gibes', 'Chinese Translation Resources', '83649 W Belmont Ave', '626-572-1096'),".
"(93, 'Danica Bruschke', 'Stevens, Charles T', '840 15th Ave', '254-782-8569'),".
"(94, 'Wilda Giguere', 'Mclaughlin, Luther W Cpa', '1747 Calle Amanecer #2', '907-870-5536'),".
"(95, 'Elvera Benimadho', 'Tree Musketeers', '99385 Charity St #840', '408-703-8505'),".
"(96, 'Carma Vanheusen', 'Springfield Div Oh Edison Co', '68556 Central Hwy', '510-503-7169'),".
"(97, 'Malinda Hochard', 'Logan Memorial Hospital', '55 Riverside Ave', '317-722-5066'),".
"(98, 'Natalie Fern', 'Kelly, Charles G Esq', '7140 University Ave', '307-704-8713'),".
"(99, 'Lisha Centini', 'Industrial Paper Shredders Inc', '64 5th Ave #1153', '703-235-3937'),".
"(100, 'Arlene Klusman', 'Beck Horizon Builders', '3 Secor Rd', '504-710-5840'),".
"(101, 'Alease Buemi', 'Porto Cayo At Hawks Cay', '4 Webbs Chapel Rd', '303-301-4946'),".
"(102, 'Louisa Cronauer', 'Pacific Grove Museum Ntrl Hist', '524 Louisiana Ave Nw', '510-828-7047'),".
"(103, 'Angella Cetta', 'Bender & Hatley Pc', '185 Blackstone Bldge', '808-892-7943'),".
"(104, 'Cyndy Goldammer', 'Di Cristina J & Son', '170 Wyoming Ave', '952-334-9408'),".
"(105, 'Rosio Cork', 'Green Goddess', '4 10th St W', '336-243-5659'),".
"(106, 'Celeste Korando', 'American Arts & Graphics', '7 W Pinhook Rd', '516-509-2347'),".
"(107, 'Twana Felger', 'Opryland Hotel', '1 Commerce Way', '503-939-3153'),".
"(108, 'Estrella Samu', 'Marking Devices Pubg Co', '64 Lakeview Ave', '608-976-7199'),".
"(109, 'Donte Kines', 'W Tc Industries Inc', '3 Aspen St', '508-429-8576'),".
"(110, 'Tiffiny Steffensmeier', 'Whitehall Robbins Labs Divsn', '32860 Sierra Rd', '305-385-9695'),".
"(111, 'Edna Miceli', 'Sampler', '555 Main St', '814-460-2655'),".
"(112, 'Sue Kownacki', 'Juno Chefs Incorporated', '2 Se 3rd Ave', '972-666-3413'),".
"(113, 'Jesusa Shin', 'Carroccio, A Thomas Esq', '2239 Shawnee Mission Pky', '931-273-8709'),".
"(114, 'Rolland Francescon', 'Stanley, Richard L Esq', '2726 Charcot Ave', '973-649-2922'),".
"(115, 'Pamella Schmierer', 'K Cs Cstm Mouldings Windows', '5161 Dorsett Rd', '305-420-8970'),".
"(116, 'Glory Kulzer', 'Comfort Inn', '55892 Jacksonville Rd', '410-224-9462'),".
"(117, 'Shawna Palaspas', 'Windsor, James L Esq', '5 N Cleveland Massillon Rd', '805-275-3566'),".
"(118, 'Brandon Callaro', 'Jackson Shields Yeiser', '7 Benton Dr', '808-215-6832'),".
"(119, 'Scarlet Cartan', 'Box, J Calvin Esq', '9390 S Howell Ave', '229-735-3378'),".
"(120, 'Oretha Menter', 'Custom Engineering Inc', '8 County Center Dr #647', '617-418-5043'),".
"(121, 'Ty Smith', 'Bresler Eitel Framg Gllry Ltd', '4646 Kaahumanu St', '201-672-1553'),".
"(122, 'Xuan Rochin', 'Carol, Drake Sparks Esq', '2 Monroe St', '650-933-5072'),".
"(123, 'Lindsey Dilello', 'Biltmore Investors Bank', '52777 Leaders Heights Rd', '909-639-9887'),".
"(124, 'Devora Perez', 'Desco Equipment Corp', '72868 Blackington Ave', '510-955-3016'),".
"(125, 'Herman Demesa', 'Merlin Electric Co', '9 Norristown Rd', '518-497-2940'),".
"(126, 'Rory Papasergi', 'Bailey Cntl Co Div Babcock', '83 County Road 437 #8581', '570-867-7489'),".
"(127, 'Talia Riopelle', 'Ford Brothers Wholesale Inc', '1 N Harlem Ave #9', '973-245-2133'),".
"(128, 'Van Shire', 'Cambridge Inn', '90131 J St', '908-409-2890'),".
"(129, 'Lucina Lary', 'Matricciani, Albert J Jr', '8597 W National Ave', '321-749-4981'),".
"(130, 'Bok Isaacs', 'Nelson Hawaiian Ltd', '6 Gilson St', '718-809-3762'),".
"(131, 'Rolande Spickerman', 'Neland Travel Agency', '65 W Maple Ave', '808-315-3077'),".
"(132, 'Howard Paulas', 'Asendorf, J Alan Esq', '866 34th Ave', '303-623-4241'),".
"(133, 'Kimbery Madarang', 'Silberman, Arthur L Esq', '798 Lund Farm Way', '973-310-1634'),".
"(134, 'Thurman Manno', 'Honey Bee Breeding Genetics &', '9387 Charcot Ave', '609-524-3586'),".
"(135, 'Becky Mirafuentes', 'Wells Kravitz Schnitzer', '30553 Washington Rd', '908-877-8409'),".
"(136, 'Beatriz Corrington', 'Prohab Rehabilitation Servs', '481 W Lemon St', '508-584-4279'),".
"(137, 'Marti Maybury', 'Eldridge, Kristin K Esq', '4 Warehouse Point Rd #7', '773-775-4522'),".
"(138, 'Nieves Gotter', 'Vlahos, John J Esq', '4940 Pulaski Park Dr', '503-527-5274'),".
"(139, 'Leatha Hagele', 'Ninas Indian Grs & Videos', '627 Walford Ave', '214-339-1809'),".
"(140, 'Valentin Klimek', 'Schmid, Gayanne K Esq', '137 Pioneer Way', '312-303-5453'),".
"(141, 'Melissa Wiklund', 'Moapa Valley Federal Credit Un', '61 13 Stoneridge #835', '419-939-3613'),".
"(142, 'Sheridan Zane', 'Kentucky Tennessee Clay Co', '2409 Alabama Rd', '951-645-3605'),".
"(143, 'Bulah Padilla', 'Admiral Party Rentals & Sales', '8927 Vandever Ave', '254-463-4368'),".
"(144, 'Audra Kohnert', 'Nelson, Karolyn King Esq', '134 Lewis Rd', '615-406-7854'),".
"(145, 'Daren Weirather', 'Panasystems', '9 N College Ave #3', '414-959-2540'),".
"(146, 'Fernanda Jillson', 'Shank, Edward L Esq', '60480 Old Us Highway 51', '410-387-5260'),".
"(147, 'Gearldine Gellinger', 'Megibow & Edwards', '4 Bloomfield Ave', '972-934-6914'),".
"(148, 'Chau Kitzman', 'Benoff, Edward Esq', '429 Tiger Ln', '310-560-8022'),".
"(149, 'Theola Frey', 'Woodbridge Free Public Library', '54169 N Main St', '516-948-5768'),".
"(150, 'Cheryl Haroldson', 'New York Life John Thune', '92 Main St', '609-518-7697'),".
"(151, 'Laticia Merced', 'Alinabal Inc', '72 Mannix Dr', '513-508-7371'),".
"(152, 'Carissa Batman', 'Poletto, Kim David Esq', '12270 Caton Center Dr', '541-326-4074'),".
"(153, 'Lezlie Craghead', 'Chang, Carolyn Esq', '749 W 18th St #45', '919-533-3762'),".
"(154, 'Ozell Shealy', 'Silver Bros Inc', '8 Industry Ln', '212-332-8435'),".
"(155, 'Arminda Parvis', 'Newtec Inc', '1 Huntwood Ave', '602-906-9419'),".
"(156, 'Reita Leto', 'Creative Business Systems', '55262 N French Rd', '317-234-1135'),".
"(157, 'Yolando Luczki', 'Dal Tile Corporation', '422 E 21st St', '315-304-4759'),".
"(158, 'Lizette Stem', 'Edward S Katz', '501 N 19th Ave', '856-487-5412'),".
"(159, 'Gregoria Pawlowicz', 'Oh My Goodknits Inc', '455 N Main Ave', '516-212-1915'),".
"(160, 'Carin Deleo', 'Redeker, Debbie', '1844 Southern Blvd', '501-308-1040'),".
"(161, 'Chantell Maynerich', 'Desert Sands Motel', '2023 Greg St', '651-591-2583'),".
"(162, 'Dierdre Yum', 'Cummins Southern Plains Inc', '63381 Jenks Ave', '215-325-3042'),".
"(163, 'Larae Gudroe', 'Lehigh Furn Divsn Lehigh', '6651 Municipal Rd', '985-890-7262'),".
"(164, 'Latrice Tolfree', 'United Van Lines Agent', '81 Norris Ave #525', '631-957-7624'),".
"(165, 'Kerry Theodorov', 'Capitol Reporters', '6916 W Main St', '916-591-3277'),".
"(166, 'Dorthy Hidvegi', 'Kwik Kopy Printing', '9635 S Main St', '208-649-2373'),".
"(167, 'Fannie Lungren', 'Centro Inc', '17 Us Highway 111', '512-587-5746'),".
"(168, 'Evangelina Radde', 'Campbell, Jan Esq', '992 Civic Center Dr', '215-964-3284'),".
"(169, 'Novella Degroot', 'Evans, C Kelly Esq', '303 N Radcliffe St', '808-477-4775'),".
"(170, 'Clay Hoa', 'Scat Enterprises', '73 Saint Ann St #86', '775-501-8109'),".
"(171, 'Jennifer Fallick', 'Nagle, Daniel J Esq', '44 58th St', '847-979-9545'),".
"(172, 'Irma Wolfgramm', 'Serendiquity Bed & Breakfast', '9745 W Main St', '973-545-7355'),".
"(173, 'Eun Coody', 'Ray Carolyne Realty', '84 Bloomfield Ave', '864-256-3620'),".
"(174, 'Sylvia Cousey', 'Berg, Charles E', '287 Youngstown Warren Rd', '410-209-9545'),".
"(175, 'Nana Wrinkles', 'Ray, Milbern D', '6 Van Buren St', '914-855-2115'),".
"(176, 'Layla Springe', 'Chadds Ford Winery', '229 N Forty Driv', '212-260-3151'),".
"(177, 'Joesph Degonia', 'A R Packaging', '2887 Knowlton St #5435', '510-677-9785'),".
"(178, 'Annabelle Boord', 'Corn Popper', '523 Marquette Ave', '978-697-6263'),".
"(179, 'Stephaine Vinning', 'Birite Foodservice Distr', '3717 Hamann Industrial Pky', '415-767-6596'),".
"(180, 'Nelida Sawchuk', 'Anchorage Museum Of Hist & Art', '3 State Route 35 S', '201-971-1638'),".
"(181, 'Marguerita Hiatt', 'Haber, George D Md', '82 N Highway 67', '925-634-7158'),".
"(182, 'Carmela Cookey', 'Royal Pontiac Olds Inc', '9 Murfreesboro Rd', '773-494-4195'),".
"(183, 'Junita Brideau', 'Leonards Antiques Inc', '6 S Broadway St', '973-943-3423'),".
"(184, 'Claribel Varriano', 'Meca', '6 Harry L Dr #6327', '419-544-4900'),".
"(185, 'Benton Skursky', 'Nercon Engineering & Mfg Inc', '47939 Porter Ave', '310-579-2907'),".
"(186, 'Hillary Skulski', 'Replica I', '9 Wales Rd Ne #914', '352-242-2570'),".
"(187, 'Merilyn Bayless', '20 20 Printing Inc', '195 13n N', '408-758-5015'),".
"(188, 'Teri Ennaco', 'Publishers Group West', '99 Tank Farm Rd', '570-889-5187'),".
"(189, 'Merlyn Lawler', 'Nischwitz, Jeffrey L Esq', '4671 Alemany Blvd', '201-588-7810'),".
"(190, 'Georgene Montezuma', 'Payne Blades & Wellborn Pa', '98 University Dr', '925-615-5185'),".
"(191, 'Jettie Mconnell', 'Coldwell Bnkr Wright Real Est', '50 E Wacker Dr', '908-802-3564'),".
"(192, 'Lemuel Latzke', 'Computer Repair Service', '70 Euclid Ave #722', '631-748-6479'),".
"(193, 'Melodie Knipp', 'Fleetwood Building Block Inc', '326 E Main St #6496', '805-690-1682'),".
"(194, 'Candida Corbley', 'Colts Neck Medical Assocs Inc', '406 Main St', '908-275-8357'),".
"(195, 'Karan Karpin', 'New England Taxidermy', '3 Elmwood Dr', '503-940-8327'),".
"(196, 'Andra Scheyer', 'Ludcke, George O Esq', '9 Church St', '503-516-2189'),".
"(197, 'Felicidad Poullion', 'Mccorkle, Tom S Esq', '9939 N 14th St', '856-305-9731'),".
"(198, 'Belen Strassner', 'Eagle Software Inc', '5384 Southwyck Blvd', '770-507-8791'),".
"(199, 'Gracia Melnyk', 'Juvenile & Adult Super', '97 Airport Loop Dr', '904-235-3633'),".
"(200, 'Jolanda Hanafan', 'Perez, Joseph J Esq', '37855 Nolan Rd', '207-458-9196'),".
"(201, 'Barrett Toyama', 'Case Foundation Co', '4252 N Washington Ave #9', '817-765-5781'),".
"(202, 'Helga Fredicks', 'Eis Environmental Engrs Inc', '42754 S Ash Ave', '716-752-4114'),".
"(203, 'Ashlyn Pinilla', 'Art Crafters', '703 Beville Rd', '305-670-9628'),".
"(204, 'Fausto Agramonte', 'Marriott Hotels Resorts Suites', '5 Harrison Rd', '212-313-1783'),".
"(205, 'Ronny Caiafa', 'Remaco Inc', '73 Southern Blvd', '215-605-7570'),".
"(206, 'Marge Limmel', 'Bjork, Robert D Jr', '189 Village Park Rd', '850-430-1663'),".
"(207, 'Norah Waymire', 'Carmichael, Jeffery L Esq', '6 Middlegate Rd #106', '415-306-7897'),".
"(208, 'Aliza Baltimore', 'Andrews, J Robert Esq', '1128 Delaware St', '408-504-3552'),".
"(209, 'Mozell Pelkowski', 'Winship & Byrne', '577 Parade St', '650-947-1215'),".
"(210, 'Viola Bitsuie', 'Burton & Davis', '70 Mechanic St', '818-864-4875'),".
"(211, 'Franklyn Emard', 'Olympic Graphic Arts', '4379 Highway 116', '215-558-8189'),".
"(212, 'Willodean Konopacki', 'Magnuson', '55 Hawthorne Blvd', '337-253-8384'),".
"(213, 'Beckie Silvestrini', 'A All American Travel Inc', '7116 Western Ave', '313-533-4884'),".
"(214, 'Rebecka Gesick', 'Polykote Inc', '2026 N Plankinton Ave #3', '512-213-8574'),".
"(215, 'Frederica Blunk', 'Jets Cybernetics', '99586 Main St', '214-428-2285'),".
"(216, 'Glen Bartolet', 'Metlab Testing Services', '8739 Hudson St', '206-697-5796'),".
"(217, 'Freeman Gochal', 'Kellermann, William T Esq', '383 Gunderman Rd #197', '610-476-3501'),".
"(218, 'Vincent Meinerding', 'Arturi, Peter D Esq', '4441 Point Term Mkt', '215-372-1718'),".
"(219, 'Rima Bevelacqua', 'Mcauley Mfg Co', '2972 Lafayette Ave', '310-858-5079'),".
"(220, 'Glendora Sarbacher', 'Defur Voran Hanley Radcliff', '2140 Diamond Blvd', '707-653-8214'),".
"(221, 'Avery Steier', 'Dill Dill Carr & Stonbraker Pc', '93 Redmond Rd #492', '407-808-9439'),".
"(222, 'Cristy Lother', 'Kleensteel', '3989 Portage Tr', '760-971-4322'),".
"(223, 'Nicolette Brossart', 'Goulds Pumps Inc Slurry Pump', '1 Midway Rd', '508-837-9230'),".
"(224, 'Tracey Modzelewski', 'Kansas City Insurance Report', '77132 Coon Rapids Blvd Nw', '936-264-9294'),".
"(225, 'Virgina Tegarden', 'Berhanu International Foods', '755 Harbor Way', '414-214-8697'),".
"(226, 'Tiera Frankel', 'Roland Ashcroft', '87 Sierra Rd', '626-636-4117'),".
"(227, 'Alaine Bergesen', 'Hispanic Magazine', '7667 S Hulen St #42', '914-300-9193'),".
"(228, 'Earleen Mai', 'Little Sheet Metal Co', '75684 S Withlapopka Dr #32', '214-289-1973'),".
"(229, 'Leonida Gobern', 'Holmes, Armstead J Esq', '5 Elmwood Park Blvd', '228-235-5615'),".
"(230, 'Ressie Auffrey', 'Faw, James C Cpa', '23 Palo Alto Sq', '305-604-8981'),".
"(231, 'Justine Mugnolo', 'Evans Rule Company', '38062 E Main St', '212-304-9225'),".
"(232, 'Eladia Saulter', 'Tyee Productions Inc', '3958 S Dupont Hwy #7', '201-474-4924'),".
"(233, 'Chaya Malvin', 'Dunnells & Duvall', '560 Civic Center Dr', '734-928-5182'),".
"(234, 'Gwenn Suffield', 'Deltam Systems Inc', '3270 Dequindre Rd', '631-258-6558'),".
"(235, 'Salena Karpel', 'Hammill Mfg Co', '1 Garfield Ave #7', '330-791-8557'),".
"(236, 'Yoko Fishburne', 'Sams Corner Store', '9122 Carpenter Ave', '203-506-4706'),".
"(237, 'Taryn Moyd', 'Siskin, Mark J Esq', '48 Lenox St', '703-322-4041'),".
"(238, 'Katina Polidori', 'Cape & Associates Real Estate', '5 Little River Tpke', '978-626-2978'),".
"(239, 'Rickie Plumer', 'Merrill Lynch', '3 N Groesbeck Hwy', '419-693-1334'),".
"(240, 'Alex Loader', 'Sublett, Scott Esq', '37 N Elm St #916', '253-660-7821'),".
"(241, 'Lashon Vizarro', 'Sentry Signs', '433 Westminster Blvd #590', '916-741-7884'),".
"(242, 'Lauran Burnard', 'Professionals Unlimited', '66697 Park Pl #3224', '307-342-7795'),".
"(243, 'Ceola Setter', 'Southern Steel Shelving Co', '96263 Greenwood Pl', '207-627-7565'),".
"(244, 'My Rantanen', 'Bosco, Paul J', '8 Mcarthur Ln', '215-491-5633'),".
"(245, 'Lorrine Worlds', 'Longo, Nicholas J Esq', '8 Fair Lawn Ave', '813-769-2939'),".
"(246, 'Peggie Sturiale', 'Henry County Middle School', '9 N 14th St', '619-608-1763'),".
"(247, 'Marvel Raymo', 'Edison Supply & Equipment Co', '9 Vanowen St', '979-718-8968'),".
"(248, 'Daron Dinos', 'Wolf, Warren R Esq', '18 Waterloo Geneva Rd', '847-233-3075'),".
"(249, 'An Fritz', 'Linguistic Systems Inc', '506 S Hacienda Dr', '609-228-5265'),".
"(250, 'Portia Stimmel', 'Peace Christian Center', '3732 Sherman Ave', '908-722-7128'),".
"(251, 'Rhea Aredondo', 'Double B Foods Inc', '25657 Live Oak St', '718-560-9537'),".
"(252, 'Benedict Sama', 'Alexander & Alexander Inc', '4923 Carey Ave', '314-787-1588'),".
"(253, 'Alyce Arias', 'Fairbanks Scales', '3196 S Rider Trl', '209-317-1801'),".
"(254, 'Heike Berganza', 'Cali Sportswear Cutting Dept', '3 Railway Ave #75', '973-936-5095'),".
"(255, 'Carey Dopico', 'Garofani, John Esq', '87393 E Highland Rd', '317-578-2453'),".
"(256, 'Dottie Hellickson', 'Thompson Fabricating Co', '67 E Chestnut Hill Rd', '206-540-6076'),".
"(257, 'Deandrea Hughey', 'Century 21 Krall Real Estate', '33 Lewis Rd #46', '336-822-7652'),".
"(258, 'Kimberlie Duenas', 'Mid Contntl Rlty & Prop Mgmt', '8100 Jacksonville Rd #7', '785-629-8542'),".
"(259, 'Martina Staback', 'Ace Signs Inc', '7 W Wabansia Ave #227', '407-471-6908'),".
"(260, 'Skye Fillingim', 'Rodeway Inn', '25 Minters Chapel Rd #9', '612-508-2655'),".
"(261, 'Jade Farrar', 'Bonnet & Daughter', '6882 Torresdale Ave', '803-352-5387'),".
"(262, 'Charlene Hamilton', 'Oshins & Gibbons', '985 E 6th Ave', '707-300-1771'),".
"(263, 'Geoffrey Acey', 'Price Business Services', '7 West Ave #1', '847-222-1734'),".
"(264, 'Stevie Westerbeck', 'Wise, Dennis W Md', '26659 N 13th St', '949-867-4077'),".
"(265, 'Pamella Fortino', 'Super 8 Motel', '669 Packerland Dr #1438', '303-404-2210'),".
"(266, 'Harrison Haufler', 'John Wagner Associates', '759 Eldora St', '203-801-6193'),".
"(267, 'Johnna Engelberg', 'Thrifty Oil Co', '5 S Colorado Blvd #449', '425-986-7573'),".
"(268, 'Buddy Cloney', 'Larkfield Photo', '944 Gaither Dr', '440-989-5826'),".
"(269, 'Dalene Riden', 'Silverman Planetarium', '66552 Malone Rd', '603-315-6839'),".
"(270, 'Jerry Zurcher', 'J & F Lumber', '77 Massillon Rd #822', '321-518-5938'),".
"(271, 'Haydee Denooyer', 'Cleaning Station Inc', '25346 New Rd', '212-792-8658'),".
"(272, 'Joseph Cryer', 'Ames Stationers', '60 Fillmore Ave', '714-584-2237'),".
"(273, 'Deonna Kippley', 'Midas Muffler Shops', '57 Haven Ave #90', '248-913-4677'),".
"(274, 'Raymon Calvaresi', 'Seaboard Securities Inc', '6538 E Pomona St #60', '317-825-4724'),".
"(275, 'Alecia Bubash', 'Petersen, James E Esq', '6535 Joyce St', '940-276-7922'),".
"(276, 'Ma Layous', 'Development Authority', '78112 Morris Ave', '203-721-3388'),".
"(277, 'Detra Coyier', 'Schott Fiber Optics Inc', '96950 Hidden Ln', '410-739-9277'),".
"(278, 'Terrilyn Rodeigues', 'Stuart J Agins', '3718 S Main St', '504-463-4384'),".
"(279, 'Salome Lacovara', 'Mitsumi Electronics Corp', '9677 Commerce Dr', '804-550-5097'),".
"(280, 'Garry Keetch', 'Italian Express Franchise Corp', '5 Green Pond Rd #4', '215-979-8776'),".
"(281, 'Matthew Neither', 'American Council On Sci & Hlth', '636 Commerce Dr #42', '952-651-7597'),".
"(282, 'Theodora Restrepo', 'Kleri, Patricia S Esq', '42744 Hamann Industrial Pky #82', '305-936-8226'),".
"(283, 'Noah Kalafatis', 'Twiggs Abrams Blanchard', '1950 5th Ave', '414-263-5287'),".
"(284, 'Carmen Sweigard', 'Maui Research & Technology Pk', '61304 N French Rd', '732-941-2621'),".
"(285, 'Lavonda Hengel', 'Bradley Nameplate Corp', '87 Imperial Ct #79', '701-898-2154'),".
"(286, 'Junita Stoltzman', 'Geonex Martel Inc', '94 W Dodge Rd', '775-638-9963'),".
"(287, 'Herminia Nicolozakes', 'Sea Island Div Of Fstr Ind Inc', '4 58th St #3519', '602-954-5141'),".
"(288, 'Casie Good', 'Papay, Debbie J Esq', '5221 Bear Valley Rd', '615-390-2251'),".
"(289, 'Reena Maisto', 'Lane Promotions', '9648 S Main', '410-351-1863'),".
"(290, 'Mirta Mallett', 'Stephen Kennerly Archts Inc Pc', '7 S San Marcos Rd', '212-870-1286'),".
"(291, 'Cathrine Pontoriero', 'Business Systems Of Wis Inc', '812 S Haven St', '806-703-1435'),".
"(292, 'Filiberto Tawil', 'Flash, Elena Salerno Esq', '3882 W Congress St #799', '323-765-2528'),".
"(293, 'Raul Upthegrove', 'Neeley, Gregory W Esq', '4 E Colonial Dr', '619-509-5282'),".
"(294, 'Sarah Candlish', 'Alabama Educational Tv Comm', '45 2nd Ave #9759', '770-732-1194'),".
"(295, 'Lucy Treston', 'Franz Inc', '57254 Brickell Ave #372', '508-769-5250'),".
"(296, 'Judy Aquas', 'Plantation Restaurant', '8977 Connecticut Ave Nw #3', '269-756-7222'),".
"(297, 'Yvonne Tjepkema', 'Radio Communications Co', '9 Waydell St', '973-714-1721'),".
"(298, 'Kayleigh Lace', 'Dentalaw Divsn Hlth Care', '43 Huey P Long Ave', '337-740-9323'),".
"(299, 'Felix Hirpara', 'American Speedy Printing Ctrs', '7563 Cornwall Rd #4462', '717-491-5643'),".
"(300, 'Tresa Sweely', 'Grayson, Grant S Esq', '22 Bridle Ln', '314-359-9566'),".
"(301, 'Kristeen Turinetti', 'Jeanerette Middle School', '70099 E North Ave', '817-213-8851'),".
"(302, 'Jenelle Regusters', 'Haavisto, Brian F Esq', '3211 E Northeast Loop', '813-932-8715'),".
"(303, 'Renea Monterrubio', 'Wmmt Radio Station', '26 Montgomery St', '770-679-4752'),".
"(304, 'Olive Matuszak', 'Colony Paints Sales Ofc & Plnt', '13252 Lighthouse Ave', '760-938-6069'),".
"(305, 'Ligia Reiber', 'Floral Expressions', '206 Main St #2804', '517-906-1108'),".
"(306, 'Christiane Eschberger', 'Casco Services Inc', '96541 W Central Blvd', '602-390-4944'),".
"(307, 'Goldie Schirpke', 'Reuter, Arthur C Jr', '34 Saint George Ave #2', '207-295-7569'),".
"(308, 'Loreta Timenez', 'Kaminski, Katherine Andritsaki', '47857 Coney Island Ave', '301-696-6420'),".
"(309, 'Fabiola Hauenstein', 'Sidewinder Products Corp', '8573 Lincoln Blvd', '717-809-3119'),".
"(310, 'Amie Perigo', 'General Foam Corporation', '596 Santa Maria Ave #7913', '972-419-7946'),".
"(311, 'Raina Brachle', 'Ikg Borden Divsn Harsco Corp', '3829 Ventura Blvd', '406-318-1515'),".
"(312, 'Erinn Canlas', 'Anchor Computer Inc', '13 S Hacienda Dr', '973-767-3008'),".
"(313, 'Cherry Lietz', 'Sebring & Co', '40 9th Ave Sw #91', '248-980-6904'),".
"(314, 'Kattie Vonasek', 'H A C Farm Lines Co Optv Assoc', '2845 Boulder Crescent St', '216-923-3715'),".
"(315, 'Lilli Scriven', 'Hunter, John J Esq', '33 State St', '325-631-1560'),".
"(316, 'Whitley Tomasulo', 'Freehold Fence Co', '2 S 15th St', '817-526-4408'),".
"(317, 'Barbra Adkin', 'Binswanger', '4 Kohler Memorial Dr', '718-201-3751'),".
"(318, 'Hermila Thyberg', 'Chilton Malting Co', '1 Rancho Del Mar Shopping C', '401-893-4882'),".
"(319, 'Jesusita Flister', 'Schoen, Edward J Jr', '3943 N Highland Ave', '717-885-9118'),".
"(320, 'Caitlin Julia', 'Helderman, Seymour Cpa', '5 Williams St', '401-948-4982'),".
"(321, 'Roosevelt Hoffis', 'Denbrook, Myron', '60 Old Dover Rd', '305-622-4739'),".
"(322, 'Helaine Halter', 'Lippitt, Mike', '8 Sheridan Rd', '201-832-4168'),".
"(323, 'Lorean Martabano', 'Hiram, Hogg P Esq', '85092 Southern Blvd', '210-856-4979'),".
"(324, 'France Buzick', 'In Travel Agency', '64 Newman Springs Rd E', '718-478-8504'),".
"(325, 'Justine Ferrario', 'Newhart Foods Inc', '48 Stratford Ave', '909-993-3242'),".
"(326, 'Adelina Nabours', 'Courtyard By Marriott', '80 Pittsford Victor Rd #9', '216-230-4892'),".
"(327, 'Derick Dhamer', 'Studer, Eugene A Esq', '87163 N Main Ave', '212-304-4515'),".
"(328, 'Jerry Dallen', 'Seashore Supply Co Waretown', '393 Lafayette Ave', '804-762-9576'),".
"(329, 'Leota Ragel', 'Mayar Silk Inc', '99 5th Ave #33', '706-221-4243'),".
"(330, 'Jutta Amyot', 'National Medical Excess Corp', '49 N Mays St', '337-515-1438'),".
"(331, 'Aja Gehrett', 'Stero Company', '993 Washington Ave', '973-544-2677'),".
"(332, 'Kirk Herritt', 'Hasting, H Duane Esq', '88 15th Ave Ne', '607-407-3716'),".
"(333, 'Leonora Mauson', 'Insty Prints', '3381 E 40th Ave', '973-412-2995'),".
"(334, 'Winfred Brucato', 'Glenridge Manor Mobile Home Pk', '201 Ridgewood Rd', '208-252-4552'),".
"(335, 'Tarra Nachor', 'Circuit Solution Inc', '39 Moccasin Dr', '415-411-1775'),".
"(336, 'Corinne Loder', 'Local Office', '4 Carroll St', '508-942-4186'),".
"(337, 'Dulce Labreche', 'Lee Kilkelly Paulson & Kabaker', '9581 E Arapahoe Rd', '248-357-8718'),".
"(338, 'Kate Keneipp', 'Davis, Maxon R Esq', '33 N Michigan Ave', '920-353-6377'),".
"(339, 'Kaitlyn Ogg', 'Garrison, Paul E Esq', '2 S Biscayne Blvd', '410-665-4903'),".
"(340, 'Sherita Saras', 'Black History Resource Center', '8 Us Highway 22', '719-669-1664'),".
"(341, 'Lashawnda Stuer', 'Rodriguez, J Christopher Esq', '7422 Martin Ave #8', '419-588-8719'),".
"(342, 'Ernest Syrop', 'Grant Family Health Center', '94 Chase Rd', '301-998-9644'),".
"(343, 'Nobuko Halsey', 'Goeman Wood Products Inc', '8139 I Hwy 10 #92', '508-855-9887'),".
"(344, 'Lavonna Wolny', 'Linhares, Kenneth A Esq', '5 Cabot Rd', '703-483-1970'),".
"(345, 'Lashaunda Lizama', 'Earnhardt Printing', '3387 Ryan Dr', '410-678-2473'),".
"(346, 'Mariann Bilden', 'H P G Industrys Inc', '3125 Packer Ave #9851', '512-223-4791'),".
"(347, 'Helene Rodenberger', 'Bailey Transportation Prod Inc', '347 Chestnut St', '623-461-8551'),".
"(348, 'Roselle Estell', 'Mcglynn Bliss Pc', '8116 Mount Vernon Ave', '419-571-5920'),".
"(349, 'Samira Heintzman', 'Mutual Fish Co', '8772 Old County Rd #5410', '206-311-4137'),".
"(350, 'Margart Meisel', 'Yeates, Arthur L Aia', '868 State St #38', '513-617-2362'),".
"(351, 'Kristofer Bennick', 'Logan, Ronald J Esq', '772 W River Dr', '812-368-1511'),".
"(352, 'Weldon Acuff', 'Advantage Martgage Company', '73 W Barstow Ave', '847-353-2156'),".
"(353, 'Shalon Shadrick', 'Germer And Gertz Llp', '61047 Mayfield Ave', '718-232-2337'),".
"(354, 'Denise Patak', 'Spence Law Offices', '2139 Santa Rosa Ave', '407-446-4358'),".
"(355, 'Louvenia Beech', 'John Ortiz Nts Therapy Center', '598 43rd St', '310-820-2117'),".
"(356, 'Audry Yaw', 'Mike Uchrin Htg & Air Cond Inc', '70295 Pioneer Ct', '813-797-4816'),".
"(357, 'Kristel Ehmann', 'Mccoy, Joy Reynolds Esq', '92899 Kalakaua Ave', '915-452-1290'),".
"(358, 'Vincenza Zepp', 'Kbor 1600 Am', '395 S 6th St #2', '619-603-5125'),".
"(359, 'Elouise Gwalthney', 'Quality Inn Northwest', '9506 Edgemore Ave', '301-841-5012'),".
"(360, 'Venita Maillard', 'Wallace Church Assoc Inc', '72119 S Walker Ave #63', '714-523-6653'),".
"(361, 'Kasandra Semidey', 'Can Tron', '369 Latham St #500', '314-732-9131'),".
"(362, 'Xochitl Discipio', 'Ravaal Enterprises Inc', '3158 Runamuck Pl', '512-233-1831'),".
"(363, 'Maile Linahan', 'Thompson Steel Company Inc', '9 Plainsboro Rd #598', '336-670-2640'),".
"(364, 'Krissy Rauser', 'Anderson, Mark A Esq', '8728 S Broad St', '631-443-4710'),".
"(365, 'Pete Dubaldi', 'Womack & Galich', '2215 Prosperity Dr', '201-825-2514'),".
"(366, 'Linn Paa', 'Valerie & Company', '1 S Pine St', '901-412-4381'),".
"(367, 'Paris Wide', 'Gehring Pumps Inc', '187 Market St', '404-505-4445'),".
"(368, 'Wynell Dorshorst', 'Haehnel, Craig W Esq', '94290 S Buchanan St', '650-473-1262'),".
"(369, 'Quentin Birkner', 'Spoor Behrins Campbell & Young', '7061 N 2nd St', '952-702-7993'),".
"(370, 'Regenia Kannady', 'Ken Jeter Store Equipment Inc', '10759 Main St', '480-726-1280'),".
"(371, 'Sheron Louissant', 'Potter, Brenda J Cpa', '97 E 3rd St #9', '718-976-8610'),".
"(372, 'Izetta Funnell', 'Baird Kurtz & Dobson', '82 Winsor St #54', '770-844-3447'),".
"(373, 'Rodolfo Butzen', 'Minor, Cynthia A Esq', '41 Steel Ct', '507-210-3510'),".
"(374, 'Zona Colla', 'Solove, Robert A Esq', '49440 Dearborn St', '203-461-1949'),".
"(375, 'Serina Zagen', 'Mark Ii Imports Inc', '7 S Beverly Dr', '260-273-3725'),".
"(376, 'Paz Sahagun', 'White Sign Div Ctrl Equip Co', '919 Wall Blvd', '601-927-8287'),".
"(377, 'Markus Lukasik', 'M & M Store Fixtures Co Inc', '89 20th St E #779', '586-970-7380'),".
"(378, 'Jaclyn Bachman', 'Judah Caster & Wheel Co', '721 Interstate 45 S', '719-853-3600'),".
"(379, 'Cyril Daufeldt', 'Galaxy International Inc', '3 Lawton St', '212-745-8484'),".
"(380, 'Gayla Schnitzler', 'Sigma Corp Of America', '38 Pleasant Hill Rd', '510-686-3407'),".
"(381, 'Erick Nievas', 'Soward, Anne Esq', '45 E Acacia Ct', '773-704-9903'),".
"(382, 'Jennie Drymon', 'Osborne, Michelle M Esq', '63728 Poway Rd #1', '570-218-4831'),".
"(383, 'Mitsue Scipione', 'Students In Free Entrprs Natl', '77 222 Dr', '530-986-9272'),".
"(384, 'Ciara Ventura', 'Johnson, Robert M Esq', '53 W Carey St', '845-823-8877'),".
"(385, 'Galen Cantres', 'Del Charro Apartments', '617 Nw 36th Ave', '216-600-6111'),".
"(386, 'Truman Feichtner', 'Legal Search Inc', '539 Coldwater Canyon Ave', '973-852-2736'),".
"(387, 'Gail Kitty', 'Service Supply Co Inc', '735 Crawford Dr', '907-435-9166'),".
"(388, 'Dalene Schoeneck', 'Sameshima, Douglas J Esq', '910 Rahway Ave', '215-268-1275'),".
"(389, 'Gertude Witten', 'Thompson, John Randolph Jr', '7 Tarrytown Rd', '513-977-7043'),".
"(390, 'Lizbeth Kohl', 'E T Balancing Co Inc', '35433 Blake St #588', '310-699-1222'),".
"(391, 'Glenn Berray', 'Griswold, John E Esq', '29 Cherry St #7073', '515-370-7348'),".
"(392, 'Lashandra Klang', 'Acqua Group', '810 N La Brea Ave', '610-809-1818'),".
"(393, 'Lenna Newville', 'Brooks, Morris J Jr', '987 Main St', '919-623-2524'),".
"(394, 'Laurel Pagliuca', 'Printing Images Corp', '36 Enterprise St Se', '509-695-5199'),".
"(395, 'Mireya Frerking', 'Roberts Supply Co Inc', '8429 Miller Rd', '914-868-5965'),".
"(396, 'Annelle Tagala', 'Vico Products Mfg Co', '5 W 7th St', '410-757-1035'),".
"(397, 'Dean Ketelsen', 'J M Custom Design Millwork', '2 Flynn Rd', '516-847-4418'),".
"(398, 'Levi Munis', 'Farrell & Johnson Office Equip', '2094 Ne 36th Ave', '508-456-4907'),".
"(399, 'Sylvie Ryser', 'Millers Market & Deli', '649 Tulane Ave', '918-644-9555'),".
"(400, 'Sharee Maile', 'Holiday Inn Naperville', '2094 Montour Blvd', '231-467-9978'),".
"(401, 'Cordelia Storment', 'Burrows, Jon H Esq', '393 Hammond Dr', '337-566-6001'),".
"(402, 'Mollie Mcdoniel', 'Dock Seal Specialty', '8590 Lake Lizzie Dr', '419-975-3182'),".
"(403, 'Brett Mccullan', 'Five Star Limousines Of Tx Inc', '87895 Concord Rd', '619-461-9984'),".
"(404, 'Teddy Pedrozo', 'Barkan, Neal J Esq', '46314 Route 130', '203-892-3863'),".
"(405, 'Tasia Andreason', 'Campbell, Robert A', '4 Cowesett Ave', '201-920-9002'),".
"(406, 'Hubert Walthall', 'Dee, Deanna', '95 Main Ave #2', '330-903-1345'),".
"(407, 'Arthur Farrow', 'Young, Timothy L Esq', '28 S 7th St #2824', '201-238-5688'),".
"(408, 'Vilma Berlanga', 'Wells, D Fred Esq', '79 S Howell Ave', '616-737-3085'),".
"(409, 'Billye Miro', 'Gray, Francine H Esq', '36 Lancaster Dr Se', '601-567-5386'),".
"(410, 'Glenna Slayton', 'Toledo Iv Care', '2759 Livingston Ave', '901-640-9178'),".
"(411, 'Mitzie Hudnall', 'Cangro Transmission Co', '17 Jersey Ave', '303-402-1940'),".
"(412, 'Bernardine Rodefer', 'Sat Poly Inc', '2 W Grand Ave', '901-901-4726'),".
"(413, 'Staci Schmaltz', 'Midwest Contracting & Mfg Inc', '18 Coronado Ave #563', '626-866-2339'),".
"(414, 'Nichelle Meteer', 'Print Doctor', '72 Beechwood Ter', '773-225-9985'),".
"(415, 'Janine Rhoden', 'Nordic Group Inc', '92 Broadway', '718-228-5894'),".
"(416, 'Ettie Hoopengardner', 'Jackson Millwork Co', '39 Franklin Ave', '509-755-5393'),".
"(417, 'Eden Jayson', 'Harris Corporation', '4 Iwaena St', '410-890-7866'),".
"(418, 'Lynelle Auber', 'United Cerebral Palsy Of Ne Pa', '32820 Corkwood Rd', '973-860-8610'),".
"(419, 'Merissa Tomblin', 'One Day Surgery Center Inc', '34 Raritan Center Pky', '562-579-6900'),".
"(420, 'Golda Kaniecki', 'Calaveras Prospect', '6201 S Nevada Ave', '732-628-9909'),".
"(421, 'Catarina Gleich', 'Terk, Robert E Esq', '78 Maryland Dr #146', '973-210-3994'),".
"(422, 'Virgie Kiel', 'Cullen, Terrence P Esq', '76598 Rd  I 95 #1', '303-776-7548'),".
"(423, 'Jolene Ostolaza', 'Central Die Casting Mfg Co Inc', '1610 14th St Nw', '757-682-7116'),".
"(424, 'Keneth Borgman', 'Centerline Engineering', '86350 Roszel Rd', '602-919-4211'),".
"(425, 'Rikki Nayar', 'Targan & Kievit Pa', '1644 Clove Rd', '305-968-9487'),".
"(426, 'Elke Sengbusch', 'Riley Riper Hollin & Colagreco', '9 W Central Ave', '602-896-2993'),".
"(427, 'Hoa Sarao', 'Kaplan, Joel S Esq', '27846 Lafayette Ave', '386-526-7800'),".
"(428, 'Trinidad Mcrae', 'Water Office', '10276 Brooks St', '415-331-9634'),".
"(429, 'Mari Lueckenbach', 'Westbrooks, Nelson E Jr', '1 Century Park E', '858-793-9684'),".
"(430, 'Selma Husser', 'Armon Communications', '9 State Highway 57 #22', '201-991-8369'),".
"(431, 'Antione Onofrio', 'Jacobs & Gerber Inc', '4 S Washington Ave', '909-430-7765'),".
"(432, 'Luisa Jurney', 'Forest Fire Laboratory', '25 Se 176th Pl', '617-365-2134'),".
"(433, 'Clorinda Heimann', 'Haughey, Charles Jr', '105 Richmond Valley Rd', '760-291-5497'),".
"(434, 'Dick Wenzinger', 'Wheaton Plastic Products', '22 Spruce St #595', '310-510-9713'),".
"(435, 'Ahmed Angalich', 'Reese Plastics', '2 W Beverly Blvd', '717-528-8996'),".
"(436, 'Iluminada Ohms', 'Nazette Marner Good Wendt', '72 Southern Blvd', '480-293-2882'),".
"(437, 'Joanna Leinenbach', 'Levinson Axelrod Wheaton', '1 Washington St', '561-470-4574'),".
"(438, 'Caprice Suell', 'Egnor, W Dan Esq', '90177 N 55th Ave', '615-246-1824'),".
"(439, 'Stephane Myricks', 'Portland Central Thriftlodge', '9 Tower Ave', '859-717-7638'),".
"(440, 'Quentin Swayze', 'Ulbrich Trucking', '278 Bayview Ave', '734-561-6170'),".
"(441, 'Annmarie Castros', 'Tipiak Inc', '80312 W 32nd St', '936-751-7961'),".
"(442, 'Shonda Greenbush', 'Saint George Well Drilling', '82 Us Highway 46', '973-482-2430'),".
"(443, 'Cecil Lapage', 'Hawkes, Douglas D', '4 Stovall St #72', '201-693-3967'),".
"(444, 'Jeanice Claucherty', 'Accurel Systems Intrntl Corp', '19 Amboy Ave', '305-988-4162'),".
"(445, 'Josphine Villanueva', 'Santa Cruz Community Internet', '63 Smith Ln #8343', '931-553-9774'),".
"(446, 'Daniel Perruzza', 'Gersh & Danielson', '11360 S Halsted St', '714-771-3880'),".
"(447, 'Cassi Wildfong', 'Cobb, James O Esq', '26849 Jefferson Hwy', '847-633-3216'),".
"(448, 'Britt Galam', 'Wheatley Trucking Company', '2500 Pringle Rd Se #508', '215-888-3304'),".
"(449, 'Adell Lipkin', 'Systems Graph Inc Ab Dick Dlr', '65 Mountain View Dr', '973-654-1561'),".
"(450, 'Jacqueline Rowling', 'John Hancock Mutl Life Ins Co', '1 N San Saba', '814-865-8113'),".
"(451, 'Lonny Weglarz', 'History Division Of State', '51120 State Route 18', '801-293-9853'),".
"(452, 'Lonna Diestel', 'Dimmock, Thomas J Esq', '1482 College Ave', '910-922-3672'),".
"(453, 'Cristal Samara', 'Intermed Inc', '4119 Metropolitan Dr', '213-975-8026'),".
"(454, 'Kenneth Grenet', 'Bank Of New York', '2167 Sierra Rd', '517-499-2322'),".
"(455, 'Elli Mclaird', 'Sportmaster Intrnatl', '6 Sunrise Ave', '315-818-2638'),".
"(456, 'Alline Jeanty', 'W W John Holden Inc', '55713 Lake City Hwy', '574-656-2800'),".
"(457, 'Sharika Eanes', 'Maccani & Delp', '75698 N Fiesta Blvd', '407-312-1691'),".
"(458, 'Nu Mcnease', 'Amazonia Film Project', '88 Sw 28th Ter', '973-751-9003'),".
"(459, 'Daniela Comnick', 'Water & Sewer Department', '7 Flowers Rd #403', '609-200-8577'),".
"(460, 'Cecilia Colaizzo', 'Switchcraft Inc', '4 Nw 12th St #3849', '608-382-4541'),".
"(461, 'Leslie Threets', 'C W D C Metal Fabricators', '2 A Kelley Dr', '914-861-9748'),".
"(462, 'Nan Koppinger', 'Shimotani, Grace T', '88827 Frankford Ave', '336-370-5333'),".
"(463, 'Izetta Dewar', 'Lisatoni, Jean Esq', '2 W Scyene Rd #3', '410-473-1708'),".
"(464, 'Tegan Arceo', 'Ceramic Tile Sales Inc', '62260 Park Stre', '732-730-2692'),".
"(465, 'Ruthann Keener', 'Maiden Craft Inc', '3424 29th St Se', '830-258-2769'),".
"(466, 'Joni Breland', 'Carriage House Cllsn Rpr Inc', '35 E Main St #43', '847-519-5906'),".
"(467, 'Vi Rentfro', 'Video Workshop', '7163 W Clark Rd', '732-605-4781'),".
"(468, 'Colette Kardas', 'Fresno Tile Center Inc', '21575 S Apple Creek Rd', '402-896-5943'),".
"(469, 'Malcolm Tromblay', 'Versatile Sash & Woodwork', '747 Leonis Blvd', '703-221-5602'),".
"(470, 'Ryan Harnos', 'Warner Electric Brk & Cltch Co', '13 Gunnison St', '972-558-1665'),".
"(471, 'Jess Chaffins', 'New York Public Library', '18 3rd Ave', '212-510-4633'),".
"(472, 'Sharen Bourbon', 'Mccaleb, John A Esq', '62 W Austin St', '516-816-1541'),".
"(473, 'Nickolas Juvera', 'United Oil Co Inc', '177 S Rider Trl #52', '352-598-8301'),".
"(474, 'Gary Nunlee', 'Irving Foot Center', '2 W Mount Royal Ave', '317-542-6023'),".
"(475, 'Diane Devreese', 'Acme Supply Co', '1953 Telegraph Rd', '816-557-9673'),".
"(476, 'Roslyn Chavous', 'Mcrae, James L', '63517 Dupont St', '601-234-9632'),".
"(477, 'Glory Schieler', 'Mcgraths Seafood', '5 E Truman Rd', '325-869-2649'),".
"(478, 'Rasheeda Sayaphon', 'Kummerer, J Michael Esq', '251 Park Ave #979', '408-805-4309'),".
"(479, 'Alpha Palaia', 'Stoffer, James M Jr', '43496 Commercial Dr #29', '856-312-2629'),".
"(480, 'Refugia Jacobos', 'North Central Fl Sfty Cncl', '2184 Worth St', '510-974-8671'),".
"(481, 'Shawnda Yori', 'Fiorucci Foods Usa Inc', '50126 N Plankinton Ave', '407-538-5106'),".
"(482, 'Mona Delasancha', 'Sign All', '38773 Gravois Ave', '307-403-1488'),".
"(483, 'Gilma Liukko', 'Sammys Steak Den', '16452 Greenwich St', '516-393-9967'),".
"(484, 'Janey Gabisi', 'Dobscha, Stephen F Esq', '40 Cambridge Ave', '608-967-7194'),".
"(485, 'Lili Paskin', 'Morgan Custom Homes', '20113 4th Ave E', '201-431-2989'),".
"(486, 'Loren Asar', 'Olsen Payne & Company', '6 Ridgewood Center Dr', '570-648-3035'),".
"(487, 'Dorothy Chesterfield', 'Cowan & Kelly', '469 Outwater Ln', '858-617-7834'),".
"(488, 'Gail Similton', 'Johnson, Wes Esq', '62 Monroe St', '760-616-5388'),".
"(489, 'Catalina Tillotson', 'Icn Pharmaceuticals Inc', '3338 A Lockport Pl #6', '609-373-3332'),".
"(490, 'Lawrence Lorens', 'New England Sec Equip Co Inc', '9 Hwy', '401-465-6432'),".
"(491, 'Carlee Boulter', 'Tippett, Troy M Ii', '8284 Hart St', '785-347-1805'),".
"(492, 'Thaddeus Ankeny', 'Atc Contracting', '5 Washington St #1', '916-920-3571'),".
"(493, 'Jovita Oles', 'Pagano, Philip G Esq', '8 S Haven St', '386-248-4118'),".
"(494, 'Alesia Hixenbaugh', 'Kwikprint', '9 Front St', '202-646-7516'),".
"(495, 'Lai Harabedian', 'Buergi & Madden Scale', '1933 Packer Ave #2', '415-423-3294'),".
"(496, 'Brittni Gillaspie', 'Inner Label', '67 Rv Cent', '208-709-1235'),".
"(497, 'Raylene Kampa', 'Hermar Inc', '2 Sw Nyberg Rd', '574-499-1454'),".
"(498, 'Flo Bookamer', 'Simonton Howe & Schneider Pc', '89992 E 15th St', '308-726-2182'),".
"(499, 'Jani Biddy', 'Warehouse Office & Paper Prod', '61556 W 20th Ave', '206-711-6498'),".
"(500, 'Chauncey Motley', 'Affiliated With Travelodge', '63 E Aurora Dr', '407-413-4842');",




"INSERT INTO `Stock` (`CompanyName`, `Price`, `Symbol`) VALUES".
"('20 20 Printing Inc', 3373, '20 '),".
"('A All American Travel Inc', 6987, 'A A'),".
"('A K Construction Co', 6716, 'A K'),".
"('A R Packaging', 4147, 'A R'),".
"('Abc Enterprises Inc', 6869, 'Abc'),".
"('Accurel Systems Intrntl Corp', 6678, 'Acc'),".
"('Ace Signs Inc', 6552, 'Ace'),".
"('Acme Supply Co', 8182, 'Acm'),".
"('Acqua Group', 9886, 'Acq'),".
"('Admiral Party Rentals & Sales', 3593, 'Adm'),".
"('Advantage Martgage Company', 5986, 'Adv'),".
"('Affiliated With Travelodge', 3450, 'Aff'),".
"('Alabama Educational Tv Comm', 3032, 'Ala'),".
"('Alexander & Alexander Inc', 8419, 'Ale'),".
"('Alinabal Inc', 117, 'Ali'),".
"('Alpenlite Inc', 1624, 'Alp'),".
"('Amazonia Film Project', 4420, 'Ama'),".
"('Ambelang, Jessica M Md', 8740, 'Amb'),".
"('American Arts & Graphics', 1936, 'Ame'),".
"('Anchorage Museum Of Hist & Art', 558, 'Anc'),".
"('Andrews, J Robert Esq', 8391, 'And'),".
"('Anker Law Office', 5828, 'Ank'),".
"('Armon Communications', 3159, 'Arm'),".
"('Arthur A Oliver & Son Inc', 7516, 'Art'),".
"('Asendorf, J Alan Esq', 1560, 'Ase'),".
"('Assink, Anne H Esq', 2298, 'Ass'),".
"('Atc Contracting', 3410, 'Atc'),".
"('Bailey Cntl Co Div Babcock', 1373, 'Bai'),".
"('Ballard Spahr Andrews', 7574, 'Bal'),".
"('Bank Of New York', 55, 'Ban'),".
"('Barkan, Neal J Esq', 142, 'Bar'),".
"('Beck Horizon Builders', 414, 'Bec'),".
"('Benton, John B Jr', 4472, 'Ben'),".
"('Berg, Charles E', 5090, 'Ber'),".
"('Beutelschies & Company', 3219, 'Beu'),".
"('Biltmore Investors Bank', 8144, 'Bil'),".
"('Binswanger', 7786, 'Bin'),".
"('Birite Foodservice Distr', 3319, 'Bir'),".
"('Bjork, Robert D Jr', 5759, 'Bjo'),".
"('Black History Resource Center', 9168, 'Bla'),".
"('Bolton, Wilbur Esq', 8598, 'Bol'),".
"('Bonnet & Daughter', 4402, 'Bon'),".
"('Bosco, Paul J', 1791, 'Bos'),".
"('Box, J Calvin Esq', 9987, 'Box'),".
"('Branford Wire & Mfg Co', 5882, 'Bra'),".
"('Bresler Eitel Framg Gllry Ltd', 3755, 'Bre'),".
"('Brooks, Morris J Jr', 591, 'Bro'),".
"('Buckley Miller & Wright', 9128, 'Buc'),".
"('Buergi & Madden Scale', 4010, 'Bue'),".
"('Burton & Davis', 3376, 'Bur'),".
"('Business Systems Of Wis Inc', 7010, 'Bus'),".
"('C 4 Network Inc', 8926, 'C 4'),".
"('C W D C Metal Fabricators', 4475, 'C W'),".
"('Cali Sportswear Cutting Dept', 8770, 'Cal'),".
"('Cambridge Inn', 7641, 'Cam'),".
"('Can Tron', 3970, 'Can'),".
"('Capitol Reporters', 8550, 'Cap'),".
"('Carroccio, A Thomas Esq', 6032, 'Car'),".
"('Cascade Realty Advisors Inc', 4555, 'Cas'),".
"('Century Communications', 2361, 'Cen'),".
"('Ceramic Tile Sales Inc', 2379, 'Cer'),".
"('Chanay, Jeffrey A Esq', 2423, 'Cha'),".
"('Chemel, James L Cpa', 9131, 'Che'),".
"('Chinese Translation Resources', 633, 'Chi'),".
"('Cindy Turner Associates', 9869, 'Cin'),".
"('Circuit Solution Inc', 1962, 'Cir'),".
"('Clark, Richard Cpa', 5927, 'Cla'),".
"('Cleaning Station Inc', 8298, 'Cle'),".
"('Cobb, James O Esq', 3225, 'Cob'),".
"('Coldwell Bnkr Wright Real Est', 6101, 'Col'),".
"('Commercial Press', 9018, 'Com'),".
"('Conte, Christopher A Esq', 7849, 'Con'),".
"('Corn Popper', 1214, 'Cor'),".
"('Courtyard By Marriott', 7776, 'Cou'),".
"('Cowan & Kelly', 7535, 'Cow'),".
"('Creative Business Systems', 4404, 'Cre'),".
"('Cullen, Terrence P Esq', 2720, 'Cul'),".
"('Cummins Southern Plains Inc', 7244, 'Cum'),".
"('Custom Engineering Inc', 8509, 'Cus'),".
"('Dal Tile Corporation', 2423, 'Dal'),".
"('Davis, Maxon R Esq', 8687, 'Dav'),".
"('Dee, Deanna', 6814, 'Dee'),".
"('Defur Voran Hanley Radcliff', 7811, 'Def'),".
"('Deltam Systems Inc', 7494, 'Del'),".
"('Dentalaw Divsn Hlth Care', 7727, 'Den'),".
"('Desco Equipment Corp', 8253, 'Des'),".
"('Development Authority', 8495, 'Dev'),".
"('Di Cristina J & Son', 8382, 'Di '),".
"('Dill Dill Carr & Stonbraker Pc', 4868, 'Dil'),".
"('Dimmock, Thomas J Esq', 8992, 'Dim'),".
"('Dobscha, Stephen F Esq', 2084, 'Dob'),".
"('Dock Seal Specialty', 5709, 'Doc'),".
"('Dorl, James J Esq', 294, 'Dor'),".
"('Double B Foods Inc', 5822, 'Dou'),".
"('Dunnells & Duvall', 8627, 'Dun'),".
"('E A I Electronic Assocs Inc', 9352, 'E A'),".
"('E T Balancing Co Inc', 416, 'E T'),".
"('Eagle Software Inc', 8107, 'Eag'),".
"('Earnhardt Printing', 4187, 'Ear'),".
"('East Coast Marketing', 5744, 'Eas'),".
"('Eder Assocs Consltng Engrs Pc', 9877, 'Ede'),".
"('Edison Supply & Equipment Co', 5040, 'Edi'),".
"('Edward S Katz', 581, 'Edw'),".
"('Egnor, W Dan Esq', 3506, 'Egn'),".
"('Eis Environmental Engrs Inc', 9205, 'Eis'),".
"('Eldridge, Kristin K Esq', 292, 'Eld'),".
"('Evans, C Kelly Esq', 3095, 'Eva'),".
"('Fairbanks Scales', 7760, 'Fai'),".
"('Farmers Insurance Group', 9641, 'Far'),".
"('Faw, James C Cpa', 2575, 'Faw'),".
"('Fbs Business Finance', 1893, 'Fbs'),".
"('Feiner Bros', 1383, 'Fei'),".
"('Feltz Printing Service', 4136, 'Fel'),".
"('Fiorucci Foods Usa Inc', 2613, 'Fio'),".
"('Five Star Limousines Of Tx Inc', 3448, 'Fiv'),".
"('Flash, Elena Salerno Esq', 7245, 'Fla'),".
"('Fleetwood Building Block Inc', 7380, 'Fle'),".
"('Fligg, Kenneth I Jr', 5203, 'Fli'),".
"('Floral Expressions', 3993, 'Flo'),".
"('Forging Specialties', 5498, 'For'),".
"('Franklin, Peter L Esq', 5867, 'Fra'),".
"('Freehold Fence Co', 1786, 'Fre'),".
"('Galaxy International Inc', 2961, 'Gal'),".
"('Garrison Ind', 943, 'Gar'),".
"('Gehring Pumps Inc', 467, 'Geh'),".
"('General Foam Corporation', 1478, 'Gen'),".
"('George Jessop Carter Jewelers', 361, 'Geo'),".
"('Germer And Gertz Llp', 5715, 'Ger'),".
"('Giampetro, Anthony D', 6481, 'Gia'),".
"('Glenridge Manor Mobile Home Pk', 9137, 'Gle'),".
"('Goeman Wood Products Inc', 4135, 'Goe'),".
"('Goulds Pumps Inc Slurry Pump', 75, 'Gou'),".
"('Grace Pastries Inc', 7510, 'Gra'),".
"('Green Goddess', 7658, 'Gre'),".
"('Griswold, John E Esq', 6764, 'Gri'),".
"('H A C Farm Lines Co Optv Assoc', 7652, 'H A'),".
"('H H H Enterprises Inc', 1599, 'H H'),".
"('H Lee Leonard Attorney At Law', 986, 'H L'),".
"('H P G Industrys Inc', 9308, 'H P'),".
"('Haavisto, Brian F Esq', 9611, 'Haa'),".
"('Haber, George D Md', 5860, 'Hab'),".
"('Haehnel, Craig W Esq', 4105, 'Hae'),".
"('Hammill Mfg Co', 9102, 'Ham'),".
"('Harris Corporation', 9971, 'Har'),".
"('Hasting, H Duane Esq', 8328, 'Has'),".
"('Haughey, Charles Jr', 29, 'Hau'),".
"('Hawaiian King Hotel', 3339, 'Haw'),".
"('Healy, George W Iv', 3919, 'Hea'),".
"('Helderman, Seymour Cpa', 1533, 'Hel'),".
"('Henry County Middle School', 3957, 'Hen'),".
"('Hermar Inc', 1164, 'Her'),".
"('Hiram, Hogg P Esq', 3588, 'Hir'),".
"('Hispanic Magazine', 1712, 'His'),".
"('Holmes, Armstead J Esq', 1337, 'Hol'),".
"('Honey Bee Breeding Genetics &', 2088, 'Hon'),".
"('Hubbard, Bruce Esq', 2007, 'Hub'),".
"('Hunter, John J Esq', 568, 'Hun'),".
"('Icn Pharmaceuticals Inc', 6420, 'Icn'),".
"('Ikg Borden Divsn Harsco Corp', 2289, 'Ikg'),".
"('In Travel Agency', 2014, 'In '),".
"('Industrial Paper Shredders Inc', 4491, 'Ind'),".
"('Ingalls, Donald R Esq', 6595, 'Ing'),".
"('Inner Label', 6191, 'Inn'),".
"('Insty Prints', 5457, 'Ins'),".
"('International Eyelets Inc', 1587, 'Int'),".
"('Irving Foot Center', 5961, 'Irv'),".
"('Italian Express Franchise Corp', 3860, 'Ita'),".
"('J & F Lumber', 598, 'J &'),".
"('J M Custom Design Millwork', 4306, 'J M'),".
"('Jackson Shields Yeiser', 6051, 'Jac'),".
"('Jeanerette Middle School', 1830, 'Jea'),".
"('Jets Cybernetics', 8275, 'Jet'),".
"('Jewel My Shop Inc', 2990, 'Jew'),".
"('John Wagner Associates', 9065, 'Joh'),".
"('Judah Caster & Wheel Co', 163, 'Jud'),".
"('Juno Chefs Incorporated', 4495, 'Jun'),".
"('Juvenile & Adult Super', 8668, 'Juv'),".
"('K Cs Cstm Mouldings Windows', 2661, 'K C'),".
"('Kaminski, Katherine Andritsaki', 5623, 'Kam'),".
"('Kansas City Insurance Report', 4719, 'Kan'),".
"('Kaplan, Joel S Esq', 6872, 'Kap'),".
"('Kbor 1600 Am', 4100, 'Kbo'),".
"('Kelly, Charles G Esq', 163, 'Kel'),".
"('Kentucky Tennessee Clay Co', 636, 'Ken'),".
"('Killion Industries', 4392, 'Kil'),".
"('King, Christopher A Esq', 8058, 'Kin'),".
"('Kleensteel', 4777, 'Kle'),".
"('Knights Inn', 5204, 'Kni'),".
"('Knwz Newsradio', 9781, 'Knw'),".
"('Kummerer, J Michael Esq', 678, 'Kum'),".
"('Kwik Kopy Printing', 9317, 'Kwi'),".
"('Lane Promotions', 519, 'Lan'),".
"('Larkfield Photo', 424, 'Lar'),".
"('Ledecky, David Esq', 4443, 'Led'),".
"('Lee Kilkelly Paulson & Kabaker', 1712, 'Lee'),".
"('Legal Search Inc', 3232, 'Leg'),".
"('Lehigh Furn Divsn Lehigh', 4572, 'Leh'),".
"('Leonards Antiques Inc', 7457, 'Leo'),".
"('Levinson Axelrod Wheaton', 3809, 'Lev'),".
"('Linguistic Systems Inc', 6625, 'Lin'),".
"('Lippitt, Mike', 1728, 'Lip'),".
"('Lisatoni, Jean Esq', 4279, 'Lis'),".
"('Little Sheet Metal Co', 1777, 'Lit'),".
"('Local Office', 4356, 'Loc'),".
"('Logan Memorial Hospital', 7279, 'Log'),".
"('Longo, Nicholas J Esq', 7084, 'Lon'),".
"('Lowy Limousine Service', 1846, 'Low'),".
"('Ludcke, George O Esq', 9622, 'Lud'),".
"('M & M Store Fixtures Co Inc', 4430, 'M &'),".
"('Maccani & Delp', 5989, 'Mac'),".
"('Magnuson', 5783, 'Mag'),".
"('Maiden Craft Inc', 190, 'Mai'),".
"('Mark Iv Press Ltd', 3557, 'Mar'),".
"('Matricciani, Albert J Jr', 8442, 'Mat'),".
"('Maui Research & Technology Pk', 581, 'Mau'),".
"('Mayar Silk Inc', 8904, 'May'),".
"('Mcauley Mfg Co', 8578, 'Mca'),".
"('Mccorkle, Tom S Esq', 6500, 'Mcc'),".
"('Mcglynn Bliss Pc', 1165, 'Mcg'),".
"('Mclaughlin, Luther W Cpa', 6651, 'Mcl'),".
"('Mcrae, James L', 699, 'Mcr'),".
"('Meca', 1092, 'Mec'),".
"('Megibow & Edwards', 2096, 'Meg'),".
"('Merlin Electric Co', 9673, 'Mer'),".
"('Metlab Testing Services', 4911, 'Met'),".
"('Mid Contntl Rlty & Prop Mgmt', 6204, 'Mid'),".
"('Mike Uchrin Htg & Air Cond Inc', 2064, 'Mik'),".
"('Milford Enterprises Inc', 7245, 'Mil'),".
"('Minor, Cynthia A Esq', 3377, 'Min'),".
"('Mitsumi Electronics Corp', 2823, 'Mit'),".
"('Moapa Valley Federal Credit Un', 5108, 'Moa'),".
"('Morlong Associates', 8115, 'Mor'),".
"('Moskowitz, Barry S', 3995, 'Mos'),".
"('Microsoft', 60, 'MSFT'),".
"('Museum Of Science & Industry', 5784, 'Mus'),".
"('Mutual Fish Co', 9165, 'Mut'),".
"('Nagle, Daniel J Esq', 7857, 'Nag'),".
"('National Medical Excess Corp', 1293, 'Nat'),".
"('Nazette Marner Good Wendt', 1053, 'Naz'),".
"('Neeley, Gregory W Esq', 8563, 'Nee'),".
"('Nelson Hawaiian Ltd', 3185, 'Nel'),".
"('Nercon Engineering & Mfg Inc', 509, 'Ner'),".
"('New York Life John Thune', 7800, 'New'),".
"('Ninas Indian Grs & Videos', 8440, 'Nin'),".
"('Nischwitz, Jeffrey L Esq', 5340, 'Nis'),".
"('Northwest Publishing', 5998, 'Nor'),".
"('Oh My Goodknits Inc', 6402, 'Oh '),".
"('Olsen Payne & Company', 1899, 'Ols'),".
"('Olympic Graphic Arts', 1031, 'Oly'),".
"('One Day Surgery Center Inc', 7587, 'One'),".
"('Opryland Hotel', 4091, 'Opr'),".
"('Orinda News', 6685, 'Ori'),".
"('Osborne, Michelle M Esq', 8160, 'Osb'),".
"('Oshins & Gibbons', 7441, 'Osh'),".
"('Pacific Grove Museum Ntrl Hist', 956, 'Pac'),".
"('Pagano, Philip G Esq', 5764, 'Pag'),".
"('Panasystems', 812, 'Pan'),".
"('Papay, Debbie J Esq', 6899, 'Pap'),".
"('Parkway Company', 1266, 'Par'),".
"('Payne Blades & Wellborn Pa', 8437, 'Pay'),".
"('Peace Christian Center', 3328, 'Pea'),".
"('Perez, Joseph J Esq', 877, 'Per'),".
"('Petersen, James E Esq', 453, 'Pet'),".
"('Plantation Restaurant', 7889, 'Pla'),".
"('Poletto, Kim David Esq', 853, 'Pol'),".
"('Porto Cayo At Hawks Cay', 296, 'Por'),".
"('Post Box Services Plus', 2015, 'Pos'),".
"('Potter, Brenda J Cpa', 3541, 'Pot'),".
"('Printing Dimensions', 4018, 'Pri'),".
"('Professional Image Inc', 4265, 'Pro'),".
"('Publishers Group West', 7490, 'Pub'),".
"('Q A Service', 915, 'Q A'),".
"('Quality Inn Northwest', 3757, 'Qua'),".
"('Radio Communications Co', 4947, 'Rad'),".
"('Rangoni Of Florence', 8136, 'Ran'),".
"('Rapid Trading Intl', 2669, 'Rap'),".
"('Ravaal Enterprises Inc', 9407, 'Rav'),".
"('Ray Carolyne Realty', 1344, 'Ray'),".
"('Redeker, Debbie', 721, 'Red'),".
"('Reese Plastics', 502, 'Ree'),".
"('Remaco Inc', 1535, 'Rem'),".
"('Replica I', 6142, 'Rep'),".
"('Reuter, Arthur C Jr', 1483, 'Reu'),".
"('Riley Riper Hollin & Colagreco', 7905, 'Ril'),".
"('Robinson, William J Esq', 5095, 'Rob'),".
"('Rodeway Inn', 5651, 'Rod'),".
"('Roland Ashcroft', 320, 'Rol'),".
"('Rossi, Michael M', 8559, 'Ros'),".
"('Rousseaux, Michael Esq', 8311, 'Rou'),".
"('Rowley Schlimgen Inc', 100, 'Row'),".
"('Royal Pontiac Olds Inc', 4380, 'Roy'),".
"('Saint George Well Drilling', 5261, 'Sai'),".
"('Sampler', 2572, 'Sam'),".
"('Santa Cruz Community Internet', 543, 'San'),".
"('Saronix Nymph Products', 7925, 'Sar'),".
"('Sat Poly Inc', 8459, 'Sat'),".
"('Scat Enterprises', 2149, 'Sca'),".
"('Schroer, Gene E Esq', 8469, 'Sch'),".
"('Seaboard Securities Inc', 2319, 'Sea'),".
"('Sebring & Co', 3195, 'Seb'),".
"('Sentry Signs', 7828, 'Sen'),".
"('Serendiquity Bed & Breakfast', 437, 'Ser'),".
"('Sharp, J Daniel Esq', 6353, 'Sha'),".
"('Shimotani, Grace T', 4828, 'Shi'),".
"('Sider, Donald C Esq', 1471, 'Sid'),".
"('Sigma Corp Of America', 8265, 'Sig'),".
"('Silberman, Arthur L Esq', 4180, 'Sil'),".
"('Simonton Howe & Schneider Pc', 2402, 'Sim'),".
"('Siskin, Mark J Esq', 3211, 'Sis'),".
"('Smc Inc', 3827, 'Smc'),".
"('Smits, Patricia Garity', 3609, 'Smi'),".
"('Solove, Robert A Esq', 8660, 'Sol'),".
"('Southern Steel Shelving Co', 1278, 'Sou'),".
"('Soward, Anne Esq', 3343, 'Sow'),".
"('Spence Law Offices', 1002, 'Spe'),".
"('Sport En Art', 5440, 'Spo'),".
"('Springfield Div Oh Edison Co', 7875, 'Spr'),".
"('Stanton, James D Esq', 1414, 'Sta'),".
"('Stevens, Charles T', 2883, 'Ste'),".
"('Stoffer, James M Jr', 1841, 'Sto'),".
"('Stuart J Agins', 4807, 'Stu'),".
"('Sublett, Scott Esq', 4478, 'Sub'),".
"('Super 8 Motel', 7535, 'Sup'),".
"('Switchcraft Inc', 7860, 'Swi'),".
"('Systems Graph Inc Ab Dick Dlr', 5763, 'Sys'),".
"('T M Byxbee Company Pc', 5275, 'T M'),".
"('Targan & Kievit Pa', 8535, 'Tar'),".
"('Terk, Robert E Esq', 2731, 'Ter'),".
"('Thompson Fabricating Co', 8011, 'Tho'),".
"('Thrifty Oil Co', 482, 'Thr'),".
"('Tipiak Inc', 6328, 'Tip'),".
"('Toledo Iv Care', 426, 'Tol'),".
"('Tree Musketeers', 4247, 'Tre'),".
"('Tri State Refueler Co', 8280, 'Tri'),".
"('Truhlar And Truhlar Attys', 7075, 'Tru'),".
"('Twiggs Abrams Blanchard', 2759, 'Twi'),".
"('Tyee Productions Inc', 9912, 'Tye'),".
"('U Pull It', 1957, 'U P'),".
"('Ulbrich Trucking', 5570, 'Ulb'),".
"('United Van Lines Agent', 2305, 'Uni'),".
"('Valerie & Company', 7568, 'Val'),".
"('Versatile Sash & Woodwork', 9793, 'Ver'),".
"('Vicon Corporation', 6610, 'Vic'),".
"('Video Workshop', 755, 'Vid'),".
"('Vlahos, John J Esq', 1011, 'Vla'),".
"('W Tc Industries Inc', 3464, 'W T'),".
"('W W John Holden Inc', 7186, 'W W'),".
"('Wallace Church Assoc Inc', 2749, 'Wal'),".
"('Warner Electric Brk & Cltch Co', 3953, 'War'),".
"('Water Office', 7527, 'Wat'),".
"('Wells Kravitz Schnitzer', 5702, 'Wel'),".
"('Westbrooks, Nelson E Jr', 4391, 'Wes'),".
"('Wheaton Plastic Products', 8071, 'Whe'),".
"('Whitehall Robbins Labs Divsn', 3712, 'Whi'),".
"('Windsor, James L Esq', 4492, 'Win'),".
"('Wise, Dennis W Md', 5489, 'Wis'),".
"('Wmmt Radio Station', 99, 'Wmm'),".
"('Wolf, Warren R Esq', 412, 'Wol'),".
"('Womack & Galich', 4875, 'Wom'),".
"('Wood & Whitacre Contractors', 638, 'Woo'),".
"('Wtlz Power 107 Fm', 2864, 'Wtl'),".
"('Wye Technologies Inc', 8117, 'Wye'),".
"('Yeates, Arthur L Aia', 5541, 'Yea'),".
"('Young, Timothy L Esq', 6047, 'You');",




"INSERT INTO `Share` (`StockName`, `Quantity`, `OwnerName`) VALUES".
"('20 ', 1900, 'Merilyn Bayless'),".
"('A A', 196, 'Beckie Silvestrini'),".
"('A K', 1859, 'Tamar Hoogland'),".
"('A R', 866, 'Joesph Degonia'),".
"('Abc', 9418, 'Lavera Perin'),".
"('Acc', 1203, 'Jeanice Claucherty'),".
"('Ace', 3165, 'Martina Staback'),".
"('Acm', 5548, 'Diane Devreese'),".
"('Acq', 278, 'Lashandra Klang'),".
"('Adm', 4983, 'Bulah Padilla'),".
"('Adv', 1851, 'Weldon Acuff'),".
"('Aff', 7405, 'Chauncey Motley'),".
"('Ala', 288, 'Sarah Candlish'),".
"('Ale', 6167, 'Benedict Sama'),".
"('Ali', 3738, 'Laticia Merced'),".
"('Alp', 1421, 'Blondell Pugh'),".
"('Ama', 6753, 'Nu Mcnease'),".
"('Amb', 3383, 'Moon Parlato'),".
"('Ame', 4589, 'Celeste Korando'),".
"('Ame', 1945, 'Felix Hirpara'),".
"('Ame', 3604, 'Joseph Cryer'),".
"('Ame', 5312, 'Matthew Neither'),".
"('Anc', 5961, 'Erinn Canlas'),".
"('Anc', 2590, 'Nelida Sawchuk'),".
"('And', 9369, 'Aliza Baltimore'),".
"('And', 5884, 'Krissy Rauser'),".
"('Ank', 4941, 'Myra Munns'),".
"('Arm', 5671, 'Selma Husser'),".
"('Art', 4076, 'Ashlyn Pinilla'),".
"('Art', 9083, 'Cecily Hollack'),".
"('Art', 4917, 'Vincent Meinerding'),".
"('Ase', 9990, 'Howard Paulas'),".
"('Ass', 2637, 'Tyra Shields'),".
"('Atc', 6126, 'Thaddeus Ankeny'),".
"('Bai', 4542, 'Helene Rodenberger'),".
"('Bai', 4515, 'Izetta Funnell'),".
"('Bai', 9430, 'Rory Papasergi'),".
"('Bal', 2377, 'Lorrie Nestle'),".
"('Ban', 3421, 'Kenneth Grenet'),".
"('Bar', 9613, 'Teddy Pedrozo'),".
"('Bec', 9770, 'Arlene Klusman'),".
"('Ben', 6058, 'Angella Cetta'),".
"('Ben', 9119, 'Chau Kitzman'),".
"('Ben', 9664, 'James Butt'),".
"('Ber', 453, 'Sylvia Cousey'),".
"('Ber', 1961, 'Virgina Tegarden'),".
"('Beu', 4897, 'Stephaine Barfield'),".
"('Bil', 9169, 'Lindsey Dilello'),".
"('Bin', 47, 'Barbra Adkin'),".
"('Bir', 6144, 'Stephaine Vinning'),".
"('Bjo', 5431, 'Marge Limmel'),".
"('Bla', 1144, 'Sherita Saras'),".
"('Bol', 7042, 'Blair Malet'),".
"('Bol', 4394, 'Meaghan Garufi'),".
"('Bon', 2441, 'Jade Farrar'),".
"('Bos', 6403, 'My Rantanen'),".
"('Box', 8897, 'Scarlet Cartan'),".
"('Bra', 1106, 'Amber Monarrez'),".
"('Bra', 7164, 'Lavonda Hengel'),".
"('Bre', 5979, 'Ty Smith'),".
"('Bro', 7709, 'Lenna Newville'),".
"('Buc', 6725, 'Graciela Ruta'),".
"('Bue', 302, 'Lai Harabedian'),".
"('Bur', 2653, 'Cordelia Storment'),".
"('Bur', 7173, 'Viola Bitsuie'),".
"('Bus', 548, 'Cathrine Pontoriero'),".
"('C 4', 6735, 'Veronika Inouye'),".
"('C W', 8641, 'Leslie Threets'),".
"('Cal', 705, 'Golda Kaniecki'),".
"('Cal', 9893, 'Heike Berganza'),".
"('Cam', 4945, 'Evangelina Radde'),".
"('Cam', 4735, 'Tasia Andreason'),".
"('Cam', 9783, 'Van Shire'),".
"('Can', 8448, 'Kasandra Semidey'),".
"('Can', 8584, 'Mitzie Hudnall'),".
"('Cap', 6702, 'Katina Polidori'),".
"('Cap', 3723, 'Kerry Theodorov'),".
"('Car', 7129, 'Jesusa Shin'),".
"('Car', 3741, 'Joni Breland'),".
"('Car', 9628, 'Norah Waymire'),".
"('Car', 7038, 'Xuan Rochin'),".
"('Cas', 9223, 'Barrett Toyama'),".
"('Cas', 1881, 'Christiane Eschberger'),".
"('Cas', 2585, 'Francine Vocelka'),".
"('Cen', 7512, 'Deandrea Hughey'),".
"('Cen', 5357, 'Fannie Lungren'),".
"('Cen', 8063, 'Jolene Ostolaza'),".
"('Cen', 7912, 'Keneth Borgman'),".
"('Cen', 978, 'Mattie Poquette'),".
"('Cer', 9374, 'Tegan Arceo'),".
"('Cha', 9762, 'Josephine Darakjy'),".
"('Cha', 7113, 'Layla Springe'),".
"('Cha', 3468, 'Lezlie Craghead'),".
"('Cha', 1520, 'Simona Morasca'),".
"('Che', 6807, 'Art Venere'),".
"('Chi', 8436, 'Cory Gibes'),".
"('Chi', 3970, 'Hermila Thyberg'),".
"('Cin', 3711, 'Erick Ferencz'),".
"('Cir', 138, 'Tarra Nachor'),".
"('Cla', 1351, 'Bernardo Figeroa'),".
"('Cle', 4901, 'Haydee Denooyer'),".
"('Cob', 3442, 'Cassi Wildfong'),".
"('Col', 6019, 'Candida Corbley'),".
"('Col', 9021, 'Jettie Mconnell'),".
"('Col', 9196, 'Olive Matuszak'),".
"('Com', 3600, 'Glory Kulzer'),".
"('Com', 8288, 'Lemuel Latzke'),".
"('Com', 9172, 'Leota Dilliard'),".
"('Con', 6241, 'Lettie Isenhower'),".
"('Cor', 1848, 'Annabelle Boord'),".
"('Cou', 7372, 'Adelina Nabours'),".
"('Cow', 6174, 'Dorothy Chesterfield'),".
"('Cre', 483, 'Reita Leto'),".
"('Cul', 5360, 'Virgie Kiel'),".
"('Cum', 8579, 'Dierdre Yum'),".
"('Cus', 7255, 'Oretha Menter'),".
"('Dal', 646, 'Yolando Luczki'),".
"('Dav', 4303, 'Kate Keneipp'),".
"('Dee', 1177, 'Hubert Walthall'),".
"('Def', 2714, 'Glendora Sarbacher'),".
"('Del', 6814, 'Galen Cantres'),".
"('Del', 6628, 'Gwenn Suffield'),".
"('Den', 2041, 'Kayleigh Lace'),".
"('Den', 9816, 'Roosevelt Hoffis'),".
"('Des', 3093, 'Chantell Maynerich'),".
"('Des', 2723, 'Devora Perez'),".
"('Dev', 3166, 'Ma Layous'),".
"('Di ', 2630, 'Cyndy Goldammer'),".
"('Dil', 9113, 'Avery Steier'),".
"('Dim', 8437, 'Lonna Diestel'),".
"('Dob', 9340, 'Janey Gabisi'),".
"('Doc', 4623, 'Mollie Mcdoniel'),".
"('Dor', 620, 'Minna Amigon'),".
"('Dou', 1910, 'Rhea Aredondo'),".
"('Dun', 5920, 'Chaya Malvin'),".
"('E A', 8657, 'Dominque Dickerson'),".
"('E T', 2562, 'Lizbeth Kohl'),".
"('Eag', 8971, 'Belen Strassner'),".
"('Ear', 5378, 'Lashaunda Lizama'),".
"('Eas', 9971, 'Shenika Seewald'),".
"('Ede', 4175, 'Kati Rulapaugh'),".
"('Edi', 3611, 'Marvel Raymo'),".
"('Edw', 3206, 'Lizette Stem'),".
"('Egn', 4589, 'Caprice Suell'),".
"('Eis', 6471, 'Helga Fredicks'),".
"('Eld', 3163, 'Marti Maybury'),".
"('Eva', 298, 'Justine Mugnolo'),".
"('Eva', 4176, 'Novella Degroot'),".
"('Fai', 2628, 'Alyce Arias'),".
"('Far', 8849, 'Levi Munis'),".
"('Far', 7075, 'Yuki Whobrey'),".
"('Faw', 2267, 'Ressie Auffrey'),".
"('Fbs', 2790, 'Valentine Gillian'),".
"('Fei', 8159, 'Kiley Caldarera'),".
"('Fel', 2062, 'Lenna Paprocki'),".
"('Fio', 6568, 'Shawnda Yori'),".
"('Fiv', 31, 'Brett Mccullan'),".
"('Fla', 8720, 'Filiberto Tawil'),".
"('Fle', 6486, 'Melodie Knipp'),".
"('Fli', 2112, 'Lai Gato'),".
"('Flo', 3434, 'Ligia Reiber'),".
"('For', 4264, 'Johnetta Abdallah'),".
"('For', 7548, 'Luisa Jurney'),".
"('For', 5245, 'Talia Riopelle'),".
"('Fra', 8671, 'Lucy Treston'),".
"('Fra', 9915, 'Maryann Royster'),".
"('Fre', 6538, 'Colette Kardas'),".
"('Fre', 9733, 'Whitley Tomasulo'),".
"('Gal', 3686, 'Cyril Daufeldt'),".
"('Gar', 8979, 'Carey Dopico'),".
"('Gar', 9725, 'Devorah Chickering'),".
"('Gar', 8018, 'Kaitlyn Ogg'),".
"('Geh', 8020, 'Paris Wide'),".
"('Gen', 5677, 'Amie Perigo'),".
"('Geo', 3514, 'Carmelina Lindall'),".
"('Geo', 8758, 'Junita Stoltzman'),".
"('Ger', 4701, 'Daniel Perruzza'),".
"('Ger', 6497, 'Shalon Shadrick'),".
"('Gia', 2172, 'Albina Glick'),".
"('Gle', 1411, 'Winfred Brucato'),".
"('Goe', 2556, 'Nobuko Halsey'),".
"('Gou', 7856, 'Nicolette Brossart'),".
"('Gra', 9145, 'Billye Miro'),".
"('Gra', 9486, 'Ernest Syrop'),".
"('Gra', 2969, 'Jina Briddick'),".
"('Gra', 556, 'Tresa Sweely'),".
"('Gre', 9061, 'Rosio Cork'),".
"('Gri', 6245, 'Glenn Berray'),".
"('H A', 1076, 'Kattie Vonasek'),".
"('H H', 6714, 'Tawna Buvens'),".
"('H L', 2448, 'Micaela Rhymes'),".
"('H P', 1189, 'Mariann Bilden'),".
"('Haa', 2213, 'Jenelle Regusters'),".
"('Hab', 70, 'Marguerita Hiatt'),".
"('Hae', 29, 'Wynell Dorshorst'),".
"('Ham', 9679, 'Salena Karpel'),".
"('Har', 3725, 'Eden Jayson'),".
"('Has', 2314, 'Kirk Herritt'),".
"('Hau', 2815, 'Clorinda Heimann'),".
"('Haw', 9407, 'Cecil Lapage'),".
"('Haw', 1846, 'Penney Weight'),".
"('Hea', 4372, 'Deeanna Juhas'),".
"('Hel', 216, 'Caitlin Julia'),".
"('Hen', 7599, 'Peggie Sturiale'),".
"('Her', 4930, 'Raylene Kampa'),".
"('Hir', 5726, 'Lorean Martabano'),".
"('His', 8716, 'Alaine Bergesen'),".
"('His', 2626, 'Lonny Weglarz'),".
"('Hol', 2332, 'Leonida Gobern'),".
"('Hol', 8311, 'Sharee Maile'),".
"('Hon', 6017, 'Thurman Manno'),".
"('Hub', 2334, 'Jamal Vanausdal'),".
"('Hun', 9617, 'Lilli Scriven'),".
"('Icn', 2456, 'Catalina Tillotson'),".
"('Ikg', 297, 'Raina Brachle'),".
"('In ', 2038, 'France Buzick'),".
"('Ind', 9069, 'Lisha Centini'),".
"('Ing', 7313, 'Willard Kolmetz'),".
"('Inn', 343, 'Brittni Gillaspie'),".
"('Ins', 8885, 'Leonora Mauson'),".
"('Int', 9140, 'Cristal Samara'),".
"('Int', 2087, 'Dyan Oldroyd'),".
"('Irv', 9824, 'Gary Nunlee'),".
"('Ita', 4927, 'Garry Keetch'),".
"('J &', 847, 'Jerry Zurcher'),".
"('J M', 7392, 'Dean Ketelsen'),".
"('Jac', 8266, 'Antione Onofrio'),".
"('Jac', 777, 'Brandon Callaro'),".
"('Jac', 7757, 'Ettie Hoopengardner'),".
"('Jea', 839, 'Kristeen Turinetti'),".
"('Jet', 1404, 'Frederica Blunk'),".
"('Jew', 1055, 'Tammara Wardrip'),".
"('Joh', 3531, 'Ciara Ventura'),".
"('Joh', 379, 'Gail Similton'),".
"('Joh', 9110, 'Harrison Haufler'),".
"('Joh', 2192, 'Jacqueline Rowling'),".
"('Joh', 9822, 'Louvenia Beech'),".
"('Jud', 428, 'Jaclyn Bachman'),".
"('Jun', 5494, 'Sue Kownacki'),".
"('Juv', 4100, 'Gracia Melnyk'),".
"('K C', 6662, 'Pamella Schmierer'),".
"('Kam', 282, 'Loreta Timenez'),".
"('Kan', 5323, 'Tracey Modzelewski'),".
"('Kap', 8682, 'Hoa Sarao'),".
"('Kbo', 9089, 'Vincenza Zepp'),".
"('Kel', 3568, 'Freeman Gochal'),".
"('Kel', 9888, 'Natalie Fern'),".
"('Ken', 8712, 'Regenia Kannady'),".
"('Ken', 2069, 'Sheridan Zane'),".
"('Kil', 5489, 'Elly Morocco'),".
"('Kin', 4001, 'Kris Marrier'),".
"('Kle', 1213, 'Cristy Lother'),".
"('Kle', 9473, 'Theodora Restrepo'),".
"('Kni', 5589, 'Emerson Bowley'),".
"('Knw', 8618, 'Ernie Stenseth'),".
"('Kum', 7651, 'Rasheeda Sayaphon'),".
"('Kwi', 6883, 'Alesia Hixenbaugh'),".
"('Kwi', 7958, 'Dorthy Hidvegi'),".
"('Lan', 3325, 'Reena Maisto'),".
"('Lar', 3571, 'Buddy Cloney'),".
"('Led', 2709, 'Allene Iturbide'),".
"('Lee', 7067, 'Dulce Labreche'),".
"('Leg', 3489, 'Truman Feichtner'),".
"('Leh', 4457, 'Larae Gudroe'),".
"('Leo', 6500, 'Junita Brideau'),".
"('Lev', 5942, 'Joanna Leinenbach'),".
"('Lin', 9369, 'An Fritz'),".
"('Lin', 7735, 'Lavonna Wolny'),".
"('Lip', 9089, 'Helaine Halter'),".
"('Lis', 4318, 'Izetta Dewar'),".
"('Lit', 5474, 'Earleen Mai'),".
"('Loc', 635, 'Corinne Loder'),".
"('Log', 4411, 'Kristofer Bennick'),".
"('Log', 6191, 'Malinda Hochard'),".
"('Lon', 8293, 'Lorrine Worlds'),".
"('Low', 5796, 'Sabra Uyetake'),".
"('Lud', 8489, 'Andra Scheyer'),".
"('M &', 363, 'Markus Lukasik'),".
"('Mac', 1136, 'Sharika Eanes'),".
"('Mag', 255, 'Willodean Konopacki'),".
"('Mai', 8668, 'Ruthann Keener'),".
"('Mar', 6358, 'Estrella Samu'),".
"('Mar', 6372, 'Fausto Agramonte'),".
"('Mar', 2214, 'Serina Zagen'),".
"('Mar', 1689, 'Viva Toelkes'),".
"('Mat', 3382, 'Lucina Lary'),".
"('Mau', 2161, 'Carmen Sweigard'),".
"('May', 257, 'Leota Ragel'),".
"('Mca', 2873, 'Rima Bevelacqua'),".
"('Mcc', 3874, 'Felicidad Poullion'),".
"('Mcc', 513, 'Kristel Ehmann'),".
"('Mcc', 3064, 'Sharen Bourbon'),".
"('Mcg', 4098, 'Glory Schieler'),".
"('Mcg', 5556, 'Roselle Estell'),".
"('Mcl', 4430, 'Wilda Giguere'),".
"('Mcr', 8839, 'Roslyn Chavous'),".
"('Mec', 4540, 'Claribel Varriano'),".
"('Meg', 9384, 'Gearldine Gellinger'),".
"('Mer', 8738, 'Herman Demesa'),".
"('Mer', 2672, 'Rickie Plumer'),".
"('Met', 4212, 'Glen Bartolet'),".
"('Mid', 2756, 'Deonna Kippley'),".
"('Mid', 1916, 'Kimberlie Duenas'),".
"('Mid', 1433, 'Staci Schmaltz'),".
"('Mik', 3438, 'Audry Yaw'),".
"('Mil', 3867, 'Alishia Sergi'),".
"('Mil', 8175, 'Sylvie Ryser'),".
"('Min', 9132, 'Rodolfo Butzen'),".
"('Mit', 8123, 'Salome Lacovara'),".
"('Moa', 1269, 'Melissa Wiklund'),".
"('Mor', 8952, 'Lili Paskin'),".
"('Mor', 7777, 'Mitsue Tollner'),".
"('Mos', 7019, 'Ammie Corrio'),".
"('Mos', 6932, 'Solange Shinko'),".
"('MSFT', 9000, 'Steve Jobs'),".
"('Mus', 8499, 'Elza Lipke'),".
"('Mut', 8381, 'Samira Heintzman'),".
"('Nag', 7956, 'Jennifer Fallick'),".
"('Nat', 5942, 'Jutta Amyot'),".
"('Naz', 8456, 'Iluminada Ohms'),".
"('Nee', 2322, 'Raul Upthegrove'),".
"('Nel', 6526, 'Audra Kohnert'),".
"('Nel', 1914, 'Bok Isaacs'),".
"('Nel', 7042, 'Rolande Spickerman'),".
"('Ner', 3539, 'Benton Skursky'),".
"('New', 9128, 'Arminda Parvis'),".
"('New', 2699, 'Cheryl Haroldson'),".
"('New', 8581, 'Jess Chaffins'),".
"('New', 4828, 'Justine Ferrario'),".
"('New', 928, 'Karan Karpin'),".
"('New', 2891, 'Lawrence Lorens'),".
"('Nin', 6124, 'Leatha Hagele'),".
"('Nis', 1113, 'Merlyn Lawler'),".
"('Nor', 4101, 'Janine Rhoden'),".
"('Nor', 2105, 'Refugia Jacobos'),".
"('Nor', 5076, 'Tonette Wenner'),".
"('Oh ', 29, 'Gregoria Pawlowicz'),".
"('Ols', 2116, 'Loren Asar'),".
"('Oly', 5642, 'Franklyn Emard'),".
"('One', 6884, 'Merissa Tomblin'),".
"('Opr', 4005, 'Twana Felger'),".
"('Ori', 2254, 'Brock Bolognia'),".
"('Osb', 7164, 'Jennie Drymon'),".
"('Osh', 6736, 'Charlene Hamilton'),".
"('Pac', 311, 'Louisa Cronauer'),".
"('Pag', 2866, 'Jovita Oles'),".
"('Pan', 9213, 'Daren Weirather'),".
"('Pap', 9021, 'Casie Good'),".
"('Par', 8853, 'Rozella Ostrosky'),".
"('Pay', 5678, 'Georgene Montezuma'),".
"('Pea', 3838, 'Portia Stimmel'),".
"('Per', 6863, 'Jolanda Hanafan'),".
"('Pet', 9356, 'Alecia Bubash'),".
"('Pla', 7515, 'Judy Aquas'),".
"('Pol', 5644, 'Carissa Batman'),".
"('Pol', 7744, 'Rebecka Gesick'),".
"('Por', 3617, 'Alease Buemi'),".
"('Por', 3461, 'Stephane Myricks'),".
"('Pos', 9932, 'Fletcher Flosi'),".
"('Pot', 560, 'Sheron Louissant'),".
"('Pri', 1862, 'Donette Foller'),".
"('Pri', 9452, 'Geoffrey Acey'),".
"('Pri', 6205, 'Laurel Pagliuca'),".
"('Pri', 1149, 'Nichelle Meteer'),".
"('Pri', 2148, 'Vallie Mondella'),".
"('Pro', 3711, 'Beatriz Corrington'),".
"('Pro', 8743, 'Chanel Caudy'),".
"('Pro', 1125, 'Lauran Burnard'),".
"('Pub', 8712, 'Teri Ennaco'),".
"('Q A', 5122, 'Laurel Reitler'),".
"('Qua', 7919, 'Elouise Gwalthney'),".
"('Rad', 5384, 'Yvonne Tjepkema'),".
"('Ran', 9190, 'Abel Maclead'),".
"('Rap', 4885, 'Roxane Campain'),".
"('Rav', 4168, 'Xochitl Discipio'),".
"('Ray', 4307, 'Eun Coody'),".
"('Ray', 2505, 'Nana Wrinkles'),".
"('Red', 4681, 'Carin Deleo'),".
"('Ree', 9580, 'Ahmed Angalich'),".
"('Rem', 5972, 'Ronny Caiafa'),".
"('Rep', 7931, 'Hillary Skulski'),".
"('Reu', 5801, 'Goldie Schirpke'),".
"('Ril', 97, 'Elke Sengbusch'),".
"('Rob', 816, 'Ilene Eroman'),".
"('Rob', 1562, 'Mireya Frerking'),".
"('Rod', 9682, 'Lashawnda Stuer'),".
"('Rod', 7465, 'Skye Fillingim'),".
"('Rol', 8392, 'Tiera Frankel'),".
"('Ros', 6803, 'Karl Klonowski'),".
"('Rou', 4183, 'Cammy Albares'),".
"('Row', 9625, 'Kallie Blackwood'),".
"('Roy', 2889, 'Carmela Cookey'),".
"('Sai', 6113, 'Shonda Greenbush'),".
"('Sam', 9931, 'Dalene Schoeneck'),".
"('Sam', 9640, 'Edna Miceli'),".
"('Sam', 1891, 'Gilma Liukko'),".
"('Sam', 3330, 'Yoko Fishburne'),".
"('San', 8043, 'Josphine Villanueva'),".
"('Sar', 6958, 'Timothy Mulqueen'),".
"('Sat', 5397, 'Bernardine Rodefer'),".
"('Sca', 803, 'Clay Hoa'),".
"('Sch', 2303, 'Detra Coyier'),".
"('Sch', 9397, 'Jesusita Flister'),".
"('Sch', 1460, 'Kanisha Waycott'),".
"('Sch', 3748, 'Maurine Yglesias'),".
"('Sch', 472, 'Valentin Klimek'),".
"('Sea', 9176, 'Herminia Nicolozakes'),".
"('Sea', 5269, 'Jerry Dallen'),".
"('Sea', 5001, 'Raymon Calvaresi'),".
"('Seb', 8129, 'Cherry Lietz'),".
"('Sen', 6114, 'Lashon Vizarro'),".
"('Ser', 3899, 'Gail Kitty'),".
"('Ser', 360, 'Irma Wolfgramm'),".
"('Sha', 7053, 'Fernanda Jillson'),".
"('Sha', 3654, 'Stephen Emigh'),".
"('Shi', 7735, 'Nan Koppinger'),".
"('Sid', 7461, 'Ezekiel Chui'),".
"('Sid', 5163, 'Fabiola Hauenstein'),".
"('Sig', 6297, 'Gayla Schnitzler'),".
"('Sig', 6740, 'Mona Delasancha'),".
"('Sil', 7104, 'Dalene Riden'),".
"('Sil', 6550, 'Kimbery Madarang'),".
"('Sil', 51, 'Ozell Shealy'),".
"('Sim', 9735, 'Flo Bookamer'),".
"('Sis', 8982, 'Taryn Moyd'),".
"('Smc', 3951, 'Arlette Honeywell'),".
"('Smi', 1777, 'Bobbye Rhym'),".
"('Sol', 2564, 'Zona Colla'),".
"('Sou', 1029, 'Ceola Setter'),".
"('Sow', 7642, 'Erick Nievas'),".
"('Spe', 7989, 'Denise Patak'),".
"('Spo', 1398, 'Bette Nicka'),".
"('Spo', 3847, 'Elli Mclaird'),".
"('Spo', 9862, 'Quentin Birkner'),".
"('Spr', 7559, 'Carma Vanheusen'),".
"('Sta', 9205, 'Fatima Saylors'),".
"('Sta', 8370, 'Rolland Francescon'),".
"('Ste', 8701, 'Aja Gehrett'),".
"('Ste', 9678, 'Danica Bruschke'),".
"('Ste', 7515, 'Mirta Mallett'),".
"('Sto', 4067, 'Alpha Palaia'),".
"('Stu', 3477, 'Derick Dhamer'),".
"('Stu', 7357, 'Mitsue Scipione'),".
"('Stu', 115, 'Terrilyn Rodeigues'),".
"('Sub', 7797, 'Alex Loader'),".
"('Sup', 1741, 'Pamella Fortino'),".
"('Swi', 4027, 'Cecilia Colaizzo'),".
"('Sys', 8696, 'Adell Lipkin'),".
"('T M', 4577, 'Gladys Rim'),".
"('Tar', 295, 'Rikki Nayar'),".
"('Ter', 9084, 'Catarina Gleich'),".
"('Tho', 6811, 'Dottie Hellickson'),".
"('Tho', 3990, 'Gertude Witten'),".
"('Tho', 1872, 'Maile Linahan'),".
"('Thr', 1562, 'Johnna Engelberg'),".
"('Tip', 3469, 'Annmarie Castros'),".
"('Tip', 7654, 'Carlee Boulter'),".
"('Tol', 5038, 'Glenna Slayton'),".
"('Tre', 6382, 'Elvera Benimadho'),".
"('Tri', 1828, 'Jose Stockham'),".
"('Tri', 1067, 'Youlanda Schemmer'),".
"('Tru', 5039, 'Sage Wieser'),".
"('Twi', 3548, 'Noah Kalafatis'),".
"('Tye', 8212, 'Eladia Saulter'),".
"('U P', 8633, 'Willow Kusko'),".
"('Ulb', 4812, 'Quentin Swayze'),".
"('Uni', 8497, 'Latrice Tolfree'),".
"('Uni', 3123, 'Lynelle Auber'),".
"('Uni', 6109, 'Nickolas Juvera'),".
"('Val', 4185, 'Linn Paa'),".
"('Ver', 1072, 'Malcolm Tromblay'),".
"('Vic', 7893, 'Annelle Tagala'),".
"('Vic', 6166, 'Marjory Mastella'),".
"('Vid', 7720, 'Vi Rentfro'),".
"('Vla', 1452, 'Nieves Gotter'),".
"('W T', 7601, 'Donte Kines'),".
"('W W', 1223, 'Alline Jeanty'),".
"('Wal', 2292, 'Venita Maillard'),".
"('War', 7511, 'Jani Biddy'),".
"('War', 5157, 'Ryan Harnos'),".
"('Wat', 1063, 'Daniela Comnick'),".
"('Wat', 8818, 'Trinidad Mcrae'),".
"('Wel', 9963, 'Becky Mirafuentes'),".
"('Wel', 9648, 'Vilma Berlanga'),".
"('Wes', 9468, 'Mari Lueckenbach'),".
"('Whe', 8390, 'Britt Galam'),".
"('Whe', 7448, 'Dick Wenzinger'),".
"('Whi', 3930, 'Paz Sahagun'),".
"('Whi', 5612, 'Tiffiny Steffensmeier'),".
"('Win', 73, 'Mozell Pelkowski'),".
"('Win', 6162, 'Shawna Palaspas'),".
"('Wis', 8066, 'Stevie Westerbeck'),".
"('Wmm', 6049, 'Renea Monterrubio'),".
"('Wol', 3596, 'Daron Dinos'),".
"('Wom', 5106, 'Pete Dubaldi'),".
"('Woo', 8697, 'Delisa Crupi'),".
"('Woo', 3728, 'Theola Frey'),".
"('Wtl', 3178, 'Alisha Slusarski'),".
"('Wye', 1817, 'Delmy Ahle'),".
"('Yea', 8624, 'Margart Meisel'),".
"('You', 8747, 'Arthur Farrow');",

"INSERT INTO `StockMarket` (`Name`, `CurrencyType`, `Founded`, `Symbol`) VALUES".
"('NASDAQ', 'USD', '1997-11-10 00:00:00', 'NASDAQ'),".
"('NYSE', 'USD/EURO/HK', '1900-11-16 00:00:00', 'NYSE');",

);

foreach ($sql as $stmt){
	if ($mysqli->query($stmt) !== TRUE) {
		echo "Error: " . $mysqli->error;
		print "Error: " . $mysqli->error;
	}	
}

$mysqli->close();


