-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 01 jun 2015 om 17:28
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `db-werkend`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bands`
--

CREATE TABLE IF NOT EXISTS `bands` (
`id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `page_link` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Gegevens worden geëxporteerd voor tabel `bands`
--

INSERT INTO `bands` (`id`, `naam`, `beschrijving`, `page_link`) VALUES
(1, 'king khan &amp; his shrines', 'The band was founded in 1999 by then 22-year-old King Khan, formerly of Canadian garage rock outfits The Spaceshits (where he operated under the pseudonym Blacksnake) and Kukamongas. The band is noted for its impressive stage antics. Typically King Khan is scantily clad, and the overwhelming frontman. His performances feature cheerleader/go-go dancer Bamboorella and a mixture of instrumentation including, but not limited to: keyboard, baritone saxophone, guitar, bass, and drums.  Khan formerly played with fellow former Spaceshit member, Mark Sultan, in the King Khan & BBQ Show, a doo-wop and punk inspired two-man band and is currently with Sultan and the Black Lips in a garage gospel super-group called Almighty Defenders. Sultan mentioned in 2010 that he and the Shrines have "bandied about" recording and singing some songs together.[1]  The original lineup of the (Sensational) Shrines consisted of King Khan on vocals and guitars, Mr. Speedfinger on guitar, Boom Boom Jennes on bass, John Boy Adonis on "big beat," Sam Cook on trumpet, percussionist Ron (a.k.a. Rahn) Streeter (who formerly played for Ike and Tina Turner, Bo Diddley, Curtis Mayfield, Stevie Wonder, and Al Jarreau), Ben Ra (the IT guy) on saxophone and Mr. Tom Bone on trombone. Eccentric French organist Fredovitch joined the lineup a week before the group recorded their first album at Toe Rag Studios in London.', 'http://en.wikipedia.org/wiki/King_Khan_and_the_Shrines'),
(2, 'the king khan &amp; BBQ show', 'The King Khan & BBQ Show is a Canadian Garage rock duo from Montreal, Quebec who mix doo-wop and punk. The band is composed of former Spaceshits bandmates Mark Sultan and Blacksnake, alias King Khan. Mark Sultan, under the pseudonym BBQ, contributed vocals, guitar, tambourine, bass drum, and snare drum, while King Khan provides lead guitar and vocals. An entertainer named Leo Chips, formerly known as Age of Danger of the Deadly Snakes, (the SHOW in King Khan & BBQ Show) joined the group as a drummer and organist for some shows during the Invisible Girl U.S tour in 2009.[1]  Although the duo originally broke up in 2010, in 2011 they announced they had started recording together again and discussed the possibility of several new albums.[2] This was followed up with continued touring in 2012 and a return to normality for the band.', 'http://en.wikipedia.org/wiki/The_King_Khan_%26_BBQ_Show'),
(3, 'the tandoori knights', '<table><tr><td>Genre</td><td>Bollybilly Rock...not really, but it''s fun to say.</td></tr><tr><td>Leden band</td><td>King Khan &amp; Bloodshot Bill</td></tr><tr><td>Geboorteplaats</td><td>Berlin/Montreal</td></tr><tr><td>Platenmaatschappij</td><td>Norton Records</td></tr><tr><td>Korte beschrijving</td><td>to make you sweat...</td></tr><tr><td>Lange beschrijving</td><td>Mood Music for slobs </td></tr><tr><td>Biografie</td><td>King Khan &amp; Bloodshot Bill - Cookin'' from the same clay oven since 2009!</td></tr><tr><td>Huidige locatie</td><td>in a hotel</td></tr><tr><td>Interesses band</td><td>Eating, sweating, swearing, kissing (girls, not each other), cooking </td></tr><tr><td>Website</td><td><a href="www.bloodshotbill.com"></a>bloodshotbill.com</td></tr><tr><td>Boekingsagent</td><td><a href="mailto:booksnribs@gmail.com">booksnribs@gmail.com</a></td></tr></table>', 'https://www.facebook.com/pages/Tandoori-Knights/160263867398604?sk=info&ref=page_internal'),
(4, 'king khan', 'Khan was born in Montreal to an Indo-Canadian family. Since 2005 he resides in Berlin, Germany with his wife and two daughters.  King Khan was a member of a number of Canadian garage bands including the Spaceshits, a frantic garage punk outfit formed in mid-1995. As his circle of fellow trouble-maker musicians grew, in 1999 he helped create a "death cult" of such musicians, originally known as the "Kukamongas" with identifying tattoos and with plans including "Jonestown, without the killing and Kool-Aid". He used the Blacksnake moniker while in the Spaceshits whose two full length albums were released on Sympathy for the Record Industry. He has spent a considerable amount of time in collaboration with former Spaceshits band-mate Mark Sultan in the two-man band, The King Khan & BBQ Show. Since 1999 King Khan has performed as part of King Khan and the Shrines, a psychedelic soul nine member band. They signed to Vice Records in 2008. In early 2009 King Khan collaborated with Mark Sultan and the four members of the Black Lips to form a gospel supergroup called Almighty Defenders. Their debut album was released on Vice Records on September 22, 2009.', 'http://en.wikipedia.org/wiki/King_Khan_%28musician%29'),
(5, 'king khan &amp; his lonesome guitar', '"King Khan" is credited on this release as "King Khan & His Lonesome Guitar!".', 'http://www.discogs.com/King-Khan-His-Lonesome-Guitar-Ugly-Women/release/1428525'),
(6, 'king khan &amp; pat meteor', '“The Fiery Tears of St. Laurent” b/w “Bon Bon” by/from/courtesy of King Khan and Pat Meteor!  “The Fiery Tears of St. Laurent” is King Khan and Pat Meteor’s tribute to French Canada. The A-side recalls the story of St. Laurent who was burned at the stake for refusing to renounce Jesus Christ in front of the King. While his flesh was burning he said, “I am crisp on this side it is time to turn me over,” an act that earned him sainthood. Shooting stars (traditionally called the Fiery Tears of St. Laurent) can often be seen above King Khan and Pat Meteor’s hometown of Montreal.', 'https://megamart.subpop.com/releases/king_khan_and_pat_meteor/the_fiery_tears_of_st_laurent'),
(7, 'saba lou &amp; king khan', 'The recording debut of King Khan ''s 6 year old daughter. 1000 pressed on yellow/red splattered vinyl.  Recorded in Berlin, 2006.', 'http://www.discogs.com/Saba-Lou-First-Day-Of-School/release/1565203'),
(8, 'The Monsters', '<table><tr><td>Begindatum</td><td>Opgericht in op augustus 1986</td></tr><tr><td>Genre</td><td>WILD PRIMITIVE CHAINSAW MASSACRE TEENAGE GARAGE PUNK TRASH</td></tr><tr><td>Leden band</td><td>LINE UP</td></tr><tr><td>1986</td><td>Beat-Man - Guitars/Vocals, Yves - Guitar, Oli - Stand up Drums</td></tr><tr><td>1987</td><td>Beat-Man - Guitars/Vocals, Yves - Guitar, R... Meer weergeven</td></tr><tr><td>Geboorteplaats</td><td>Bern,Aarau</td></tr><tr><td>Platenmaatschappij</td><td>Voodoo Rhythm Records</td></tr><tr><td>Korte beschrijving</td><td>WILD PRIMITIVE CHAINSAW MASSACRE TEENAGE GARAGE PUNK TRASH FROM BERN SWITZERLAND</td></tr><tr><td>Lange beschrijving</td><td>the Monsters record release tour dates:</td></tr><tr><td>THE MONSTERS TOUR:</td><td>29sept. swiss zurich STALL 6<br>30sept. austria dorbirn transmitter... Meer weergeven</td></tr><tr><td>Biografie</td><td>The Monsters where formed in 1986 in small-town Bern, capital of Switzerland. Their sound is a fuzzedout mix between 60ies g... Meer weergeven</td></tr><tr><td>Huidige locatie</td><td>the world</td></tr><tr><td>Algemeen directeur</td><td>BOOKING: JAN@THEMONSTERS.CH</td></tr><tr><td>E-mailadres</td><td>JAN@THEMONSTERS.CH</td></tr><tr><td>Website</td><td>http://themonsters.ch/</td></tr><tr><td>Informatie voor pers</td><td>info@voodoorhythm.com</td></tr><tr><td>Boekingsagent</td><td>jan@themonsters.ch</td></tr></table>', 'https://www.facebook.com/pages/The-Monsters-official/123189661111110?sk=info&tab=page_info'),
(9, 'Reverend Beat-Man', 'Beat Zeller (born 1967), better known as Beat-Man or Reverend Beat-Man, is a Swiss musician, DJ and record company owner. He performs as a one-man band, as the leader of psychobilly band The Monsters, and with other bands, in a style described as primitive rock and roll and as "gospel blues trash". He is also the founder and head of Voodoo Rhythm Records, a company based in Bern, Switzerland.', 'http://en.wikipedia.org/wiki/Reverend_Beat-Man'),
(10, 'Lightning Beat-Man &amp; His No Talent', 'FIRST RELEASE 1994 As Young 13 year old Beat-Man (born. Beat Zeller) he started experimenting with his 4 Track machine, first under the Name Taeb Zerfall (1985) , then in 1992 after a Longer US Trip and inspired by Mexican Wretling in Los Angeles under the Name Lightning Beat-Man, back then the main theme was: "I FIGHT ON STAGE AGAINST ME AND MY GUITAR AND BEAT THE SHIT OUT OF IT AND WIN EVERY NIGHT" the Rawness and Directness of the Recordings are Unbeatable for the Time it came out, it Was the time when Techno and DJ''s totally took over everything and there was absolutely no Space for Trash at all.. when the Record came out it didn''t sell lot and the critics where very bad in the beginning also for the Live shows (the theme of the live shows where, play as Bad ,Fucked Up and Drunk as possible) but after a while came Touring in Europe and Shows together with the Ramones, Dick Dale , Prince, Fireworks Dead Moon and many more (almost 250 shows a year) and his Own Little Show on VIVA and MTV where he travels Around the US with a Wrestling Mask and interviewing People and Visiting Graveyards of Dead Rock''n''roll Artists, and the 2nd Album (Apartment Wrestling Rock''n''Roll- voodoo rhythm) who came on the Marked like a Atomic Explosion and as well made this 1st Album as a Collectors item, so we thought to give it to the People again together with 3 Outstanding Noisy Trashed out Bonus Tracks, and yea the Whole Album and Recordings are as Fresh as they would be made today.. the only problem is a Ground Noise that the Tascam Tape Deck had while recording.. but that''s how it is if you Record in a LOW BUDGET WAY', 'http://www.voodoorhythm.com/82-artists/lightning-beat-man-and-the-never-heard-of-ems/56-lightning-beat-man-and-z-he-s-no-talent-wrestling-rock-n-roll.html'),
(11, 'Lightning Beat-Man &amp; the Never Heard Of''EMS', 'This is the 2nd Lightning Beat-Man album, the first one was released in 1994 as a 10" vinyl album only with mostly strictly One Man recordings from 1982-94 but this item is long sold out but we can give you: the most frenetic Wrestling Rock''n''Roll Platter ever recorded in history of rock music, totally fucked up lyrics and radio interviews with Lightning beat-man, live Cuts from Tours and some One-Man-Recordings as well.. But most of the songs where recorded with his backing band "The Never Heard Of Ems" (members of The Monsters, The Get Lost, Miracle Workers...) in the legendary London Toe Rag Studios during their European tour in 1998... and mastered over the air trough a Swiss local radio station... get this record and it will push you direct into the wrestling ring of live loud Primitive Garage Rock''n''Roll to the edge !!!! Lightning Beat-Man is a Masked Super Hero... A Wrestling Rock ''n'' Roller fighting against him self and his Guitar and always wins!!! His Shows were Cult, he had a Whole Wrestling Rock ''n'' Roll Show with Wrestlers Fighters Revere and Live Rock''n''Roll Touring whole Europe, fighting in the Audience and on Stage. One of the most Bizarre and Frantic Shows ever... Lightning Beat-Man stopped the show and the Act in 2000 and is now playing as Reverend Beat-Man cause of Looking too much into the light.', 'http://www.voodoorhythm.com/82-artists/lightning-beat-man-and-the-never-heard-of-ems/57-lightning-beat-man-and-the-never-heard-of-ems-apartment-wrestling-rock-n-roll.html'),
(12, 'Die Zorros', '<table><tr><td>Genre</td><td>SLEAZY SHOPING MALL LOW BUDGET MUSIC</td></tr><tr><td>Leden band</td><td>PATRICK ABT (GUITAR 4+6 STRINGS)</td></tr><tr><td>BEAT-MAN ( DRUMS, VOCALS)</td><td>OLIFR.M.GUZ (FARFISA ORGAN VOCALS)</td></tr><tr><td>Geboorteplaats</td><td>BERN,ZÜRICH,SCHAFFHAUSEN</td></tr><tr><td>Platenmaatschappij</td><td>VOODOO RHYTHM RECORDS</td></tr><tr><td>Korte beschrijving</td><td>THE KINGS OF LOW !!!</td></tr><tr><td>Lange beschrijving</td><td>17 SONGS AND NO MERCY<br>A SMALL TOWN LOCAL STRIP BEER JOINT DANCE BAND DESASTER</td></tr><tr><td>Biografie</td><td>Formed in 2000 as a Theatre and Poetry Slam Project , played and recorded Music for Swiss Poet PEDRO LENZ , and Theater Dire... Meer weergeven</td></tr><tr><td>Huidige locatie</td><td>BERN</td></tr><tr><td>Algemeen directeur</td><td>VOODOO RHYTHM RECORDS</td></tr><tr><td>Deze artiesten vinden we ook goed</td><td>DAVID HASSELHOF, HEINO,50CENT</td></tr><tr><td>Invloeden</td><td>JOE MEEK, LSD</td></tr><tr><td>Interesses band</td><td>WHITE WINE, FOOD, NO REHURCALS</td></tr><tr><td>Website</td><td>http://www.voodoorhythm.com/zorros.htm</td></tr><tr><td>Boekingsagent</td><td>BOOKING@VOODOORHYTHM.COM</td></tr></table>', 'https://www.facebook.com/DIEZORROS/info?tab=page_info');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `platen`
--

CREATE TABLE IF NOT EXISTS `platen` (
`id` int(11) unsigned NOT NULL,
  `band` int(11) DEFAULT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `jaar` int(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Gegevens worden geëxporteerd voor tabel `platen`
--

INSERT INTO `platen` (`id`, `band`, `titel`, `jaar`) VALUES
(1, 1, 'Billiards at Nine Thirty ', 2004),
(2, 1, 'What is', 2007),
(3, 1, 'Mr. Supernatural', 2004),
(4, 1, 'Three Hairs and You''re Mine', 2001),
(5, 1, 'The Supreme Genius of...', 2008),
(6, 2, 'Invisible Girl', 2009),
(7, 2, 'The King Khan &amp; BBQ show', 2007),
(8, 2, 'The King Khan &amp; BBQ show', 2005),
(9, 2, 'What''s for Dinner?', 2006),
(10, 2, 'Teabag Party', 2007),
(11, 2, 'We are the Ocean / Terrapin', 2011),
(12, 3, 'Curry Up', 2010),
(13, 3, 'Gomper ', 2010),
(14, 3, 'Pretty Please / Bucketful', 2009),
(15, 4, 'It''s a Lie / Congratulations I''m sorry', 2008),
(16, 5, 'Ugly Women! / Run Blacksnake Run', 2008),
(17, 6, 'The Fiery Tears of St. Laurent / Bon Bon', 2010),
(18, 7, 'First day of School / I want to sing what I want / +2', 2007),
(19, 8, 'Masks', 2013),
(20, 8, 'The Hunch', 2013),
(21, 8, 'Youth Against Nature', 1995),
(22, 8, 'Youth Against Nature', 2003),
(23, 8, 'Birds Eat Martians', 1998),
(24, 8, 'I See Dead People', 2002),
(25, 8, '&hellip;Pop Up Yours', 2011),
(26, 8, 'Jungle Noise', 1994),
(27, 8, 'Split - Dead Moon: It''s OK / Monsters: Burn my mind', 1996),
(28, 8, 'I Still Love Her', 2007),
(29, 9, 'Get On Your Knees', 2001),
(30, 9, 'Get On Your Knees', 2001),
(31, 9, 'Get On Your Knees', 2012),
(32, 9, 'Surreal Folk Blues Gospel', 2007),
(33, 9, 'I Don''t Need No Cocaine I Just Need My Hot Rod', 2010),
(34, 9, 'Mililt&uuml;rk', 2011),
(35, 9, 'It''s A Beat-Man''s World', 2012),
(36, 10, 'Wrestling Rock''n''Roll', 2008),
(37, 11, 'Apartment Wrestling Rock''n''roll', 0),
(38, 12, 'History Of Rock Vol. 7', 2010),
(39, 12, 'Future', 2012),
(40, 9, 'Surreal Flok Blues Gospel Trash Vol 3', 2008),
(41, 9, 'I''ll Take Care Of You', 2012),
(42, 9, 'Ding Dong Baby', 2012);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bands`
--
ALTER TABLE `bands`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `platen`
--
ALTER TABLE `platen`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bands`
--
ALTER TABLE `bands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `platen`
--
ALTER TABLE `platen`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
