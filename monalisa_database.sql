-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2023 at 09:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monalisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `monalisa`
--

CREATE TABLE `monalisa` (
  `id` int(11) NOT NULL,
  `Artwork Name` varchar(30) DEFAULT NULL,
  `Image` varchar(26) DEFAULT NULL,
  `Artist` varchar(23) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL,
  `Happy Description` varchar(897) DEFAULT NULL,
  `Angry Description` varchar(1026) DEFAULT NULL,
  `Sad Description` varchar(957) DEFAULT NULL,
  `Neutral Description` varchar(857) DEFAULT NULL,
  `happy` int(11) DEFAULT 0,
  `sad` int(11) DEFAULT 0,
  `angry` int(11) DEFAULT 0,
  `neutral` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `monalisa`
--

INSERT INTO `monalisa` (`id`, `Artwork Name`, `Image`, `Artist`, `Year`, `Happy Description`, `Angry Description`, `Sad Description`, `Neutral Description`, `happy`, `sad`, `angry`, `neutral`) VALUES
(1, 'Ghost Gully evening ', 'img/collection/pxArt.png', 'Henry Rielly', 1894, 'Stanthorpe, some 200km southwest of Brisbane, is located in the Southern Downs, the centre of the Granite Belt, a region of spectacular geologic formations. Tin was first discovered along watercourses, streams and creeks in the area in 1852, and by the 1870s saw a great rush to mine alluvial tin at Quart Pot Creek, now known as Stanthorpe (Tintown), named after the Latin word for tin (Stannum). At one time the area claimed to be the most successful tin mining field in Queensland, as tin was in plentiful supply from the granite outcrops from which it originates.', 'The scene is set at Ghost Gully, a small watercourse adjoining Whiskey Gully, the site of an old hotel south of Stanthorpe, 170 km southeast of Brisbane, Queensland. Folklore relates that Ghost Gully was so-called after miners who imbibed too freely at the Whiskey Gully hotel and then experienced the ‘DTs’ (delirium tremens) caused by alcohol withdrawal, which could bring on hallucinations. ', 'Offering an alternative to Australia’s traditional sun-soaked image, Henry Rielly’s painting Ghost Gully evening 1894 (illustrated) suggests a somewhat melancholy sentiment, with a group of three dead trees in the middle ground and two lone Bushmen setting up camp as the darkening shadows of evening descend.', 'Rielly established his reputation in Victoria where he was a founding member of the Victorian Academy of Arts in 1870, exhibiting at the Academy and on its Council from 1875-84 before moving north. The Queensland Art Society was formed in 1887 and Rielly exhibited with the Society and acted as a Council member in 1894. He exhibited Ghost Gully evening at the Society the year it was executed and it is clear Rielly thought highly of the painting as he presented it to the fledgling Queensland (National) Art Gallery.', 24, 8, 8, 5),
(2, 'South Brisbane', 'img/collection/pxArt-2.png', 'Margaret Olley ', 1966, 'Margaret Olley moved to Brisbane when she was 12 and was a boarder at Somerville House school for girls in South Brisbane from 1937 to 1940 where they were quick to recognise Olley’s talents and recommended to her mother that she attend art school. Her friend and fellow artist Margaret Cilento also began formal art studies at the same school.\nOlley’s journey to becoming an artist began at the Brisbane Central Technical College in 1941 (now Queensland University of Technology). She moved to Sydney in 1943 to enrol in a diploma of art at East Sydney Technical College (later the National Art School), graduating with first-class honours in 1947. In Sydney Olley connected with many Australian art luminaries — such as Russell and Bon Drysdale, Donald Friend and Justin O’Brien — and experimented with a wide range of subject matter for her works, including landscapes, figures and still lifes.', 'Olley left Brisbane two years before the Queensland Art Gallery opened in 1982. Her family home ‘Farndon’ was destroyed by fire in 1980, and Olley moved back to Sydney permanently having already purchased a terrace house in Duxford St, Paddington in 1964 to stay when visiting and an adjacent former hat factory which she renovated to use as a studio. 1982 saw the passing of Olley’s mother Grace, finally breaking the ties to Brisbane.', 'Back at the family home in ‘Farndon’, Brisbane no longer seemed quite as stifling. Towards the end of the 1950s Olley opened an antique shop at Stones Corner, an inner southern suburb of the city, and on the way to and home had to change trams. Olley reminisced…\nI had to change trams at South Brisbane, which was very run-down in those days, full of depressed-looking hotels, real bloodhouses.\nStreet in South Brisbane were demolished toward the end of 1966 to make way for the new and third Victoria Bridge, and those on the right from 1978 for the construction of the Cultural Centre’s Performing Arts Complex.\nOne can imagine Olley sketching these landmarks in South Brisbane while in transit, knowing of the impending demolition and bridge construction to come just months later. However, what Olley didn’t know was just some years later, the area would be claimed for the future new premises of the Queensland Art Gallery.', 'In 1953 Olley returned from travelling abroad to her family home in Morry Street, Hill End (now West End) after the sudden death of her father. In the first few years after her return, Olley travelled to Sydney from time to time to meet new artists and renew friendships with Donald Friend, David Strachan and Sidney, Cynthia and Jinx Nolan, and these friends visited her in Brisbane. In Brisbane a lively art circle surrounded Brian and Marjorie Johnstone’s Gallery, where Olley met artists Ray Crooke, Jon Molvig and Charles and Barbara Blackman. A supportive environment for Olley and many other progressive artists of the time was similarly encouraged by the appointment of Robert Haines as Director of the then named Queensland National Art Gallery, and by art historian Dr Gertrude Langer’s writing as art critic for the city’s Courier-Mail newspaper.', 6, 3, 2, 3),
(5, 'The fair musterer', 'img/collection/pxArt-5.png', 'RIX NICHOLAS, Hilda', 1935, 'Painted during the spring of 1935 not far from Rix Nicholas’s new and spacious studio at Knockalong in southern New South Wales, The fair musterer is one of Rix Nicholas’s largest and most important pictures. It marks the resumption of her professional career after the birth of her son in 1930. The model was Nance Edgley, her son’s first governess who worked at Knockalong during 1934 and 1935. One of the artist’s favourite views of the Tombong Range and the neighbouring property of Tombong can be seen in the distance. Exhibited in London in 1937 at the ‘Artists of the British Empire Overseas’ exhibition, The fair musterer was widely featured in the British press, where it was acclaimed as ‘one of the outstanding pictures in the exhibition’1 and ‘typically Australian in both subject and treatment’.2', 'More significant than her ‘French’ style was the fact that she chose to paint large, public pictures about Australian rural life at a time when the genre was the exclusive domain of men. In works such as The fair musterer Rix Nicholas proposed that women had been equal partners in the formation of the imagined community of the nation, a manoeuvre which challenged the patriarchal structure of Australian cultural life.\nThe majority of writers and painters working in Melbourne and Sydney at the end of the nineteenth century had emphasised notions of manliness as crucial to the formation of national attitudes and values. Within this ideological framework, the role of women was rarely acknowledged — women were inevitably cast as subordinate figures who had nothing of significance to offer a nationalist aesthetic founded by men and linked to ideas about masculinity.', 'Rix Nicholas’s style was unusual in Australia between the wars; it was out of keeping with conventional artistic practice and challenged well-established ideas about the way rural Australia should be represented. The distinctive and unorthodox nature of her palette owed a great deal to the fashionable style of the French Salon prior to the First World War and singled out her pictures from those of her contemporaries such as Arthur Streeton and Hans Heysen, whose imagery popularly symbolised the nature of ‘Australianness’ during the 1920s and 1930s. Rix Nicholas’s pictures referred to the same kinds of ideals and values, but her livelier painting methods meant that she represented the landscape differently, and in a way that was seen to be somewhat disconcerting.', 'In the years following the First World War the bush ideal was enlarged and expanded by writers such as C E W Bean, who equated the digger’s fighting prowess with the bushman’s ‘up country’ life. When the nationalist rhetoric of the 1890s was reinterpreted in the context of the ‘Anzac’ experience, the bush acquired an even greater significance. As far as Rix Nicholas was concerned, however, a woman had as much right to paint the bush as a man. Gender barriers were irrelevant to her choice of subject matter. ‘The work is the thing that matters’, she proclaimed, not who does it’.3\nRix Nicholas wanted her pictures to valorise Australia and its unique way of life. The fact that rural Australia had become a highly significant cultural site painted by men did not deter her resolve.', 3, 0, 3, 4),
(3, 'An alien in Australia ', 'img/collection/pxArt-3.png', 'Richard Godfrey Rivers ', 1904, 'R (Richard) Godfrey Rivers (1858-1925) painted the Butea blooms in An alien in Australia in 1904 for the Queensland Art Society’s annual exhibition. It’s easy to imagine that Rivers felt encouraged to produce a grand study of this exotic species after the enthusiastic response to his painting Under the jacaranda 1903 exhibited the previous year.', 'The painting An alien in Australia however was not as well received as Under the jacaranda. Hoping to capitalise public approval on Under the jacaranda 1903, the following year Rivers exhibited another portrait of an individual tree — the Butea. He received this piece of criticism:\n. . . if [Rivers] had been content to take the tree and a small area of the trimly kept lawn, in the midst of which [the tree] throws its graceful shade, he would have produced a picture to which little exception could be taken, but the bandstand has also been introduced . . . The structure has a crowded look, and its presence detracts from the beauty of the picture.2\nRivers took this criticism to heart, sometime after the painting was exhibited he cut the painting down and reworked sections to remove all trace of the offending bandstand. The work remained in the collection of his widow, Selina Rivers, until 1941, when she presented it to the Queensland Art Gallery as An alien in Australia (the original title An alien in Queensland).', 'While the vibrant vermilion blooms of the ‘Flame of the Forest’ would have stood out against the dark greens of its home in the tropical forests of South-East Asia, in Australia, it was the showy lavender jacaranda that drew the most admiration. \nThe jacaranda of Rivers’s painting survived until 1979, when it was blown over in a storm. A solitary specimen of the ‘Flame of the Forest’ still blooms in the Brisbane Botanic Gardens, as it has done since it was painted by Rivers.', 'The work An alien in Australia depicts the introduced ‘Flame of the Forest’ tree (Butea monosperma, formally known as Butea frondosa), the species native to tropical and sub-tropical parts of the Indian subcontinent and South-East Asia. The tree Rivers painted was planted in Brisbane’s Botanical Gardens by Gardens Superintendent Walter Hill (1819-1904) in the 1860s.', 2, 1, 2, 1),
(4, 'The reservoir, Centennial Park', 'img/collection/pxArt-4.png', 'Jeffrey Smart ', 1988, 'Australian artist Jeffrey Smart (1921-2013) is one of Australia’s most celebrated artists, seeking inspiration from the world around him.\nSmart portrays the sinister cheerfulness and bright sterility of a modern, progressive, industrial society with gem like clarity and precision. Early in his painting career he found a particular personal vision of the world and carefully refined this during his career.\nAfter 10 years in Australia Smart had achieved a national reputation as a leading, distinctly independent artist. His work was included in London exhibitions of Australian art in the early 1960s, when contemporary Australian painters were briefly enjoying enthusiastic attention from the English critics. By 1963 he was ready to return to Europe and live in Italy.', 'Smart was forced by his financial situation to return to Australia in 1950. Australia in the 1950s, after almost two years spent in the bustle of Paris, must have seemed hauntingly desolate, and it was at this time that Smart developed his distinctive, slightly surreal view of the city as a desert of human emotions, which corresponds with the equally bleak and strange vision of the Australian outback which his friend Russell Drysdale was exploring at the same time.', 'It was in his home town of Adelaide that Smart first defined the kind of eerie emptiness and tedium that is depicted in his work. After years of living in Italy, the rather monochromatic Australian dustiness of Smart’s early paintings was replaced by a clinically sharp focus and pure colour, yet the peculiar sense of unfulfilled listlessness of Sunday afternoons in Adelaide remained in his work.\nThere is nothing about Smart’s work (apart from the subject matter) that could be specifically associated with a particular place or country. As an international artist, he expresses something about the human condition which is universal, and paints locations such as airports, highways and housing estates, which are common to every industrialised society. This ambiguity of place, even a feeling of being lost, carries his work beyond social commentary to convey that particular mood of mysterious loneliness which writers like to describe as ‘alienation’.', 'In The reservoir, Centennial Park 1988 there is an underlying seriousness of purpose which is playfully counterpointed. The isolated figure which appeared in his paintings for decades is here, weighed down by a heavy bag and the immediate prospect of a further steep climb. The primary colours of her bag and the clothes of the runners who bound up the steps and stream along the crest of the embankment contrast with the severity of the environment. Particular elements and moods recur in Smart’s works and here again a small discovered landscape of apartment buildings appear in the background.', 1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monalisa`
--
ALTER TABLE `monalisa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monalisa`
--
ALTER TABLE `monalisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
