-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2020 at 03:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitedrives_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `car_id` int(11) NOT NULL,
  `make` varchar(200) NOT NULL,
  `year_created` int(4) NOT NULL,
  `transmission` text,
  `market_price` int(11) NOT NULL,
  `color` text,
  `bluetooth` text,
  `fuel_type` text,
  `details_description` text NOT NULL,
  `trip_price` int(11) NOT NULL,
  `car_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`car_id`, `make`, `year_created`, `transmission`, `market_price`, `color`, `bluetooth`, `fuel_type`, `details_description`, `trip_price`, `car_type`) VALUES
(1, 'Mercedes-Benz C43 AMG', 2017, 'Automatic', 56425, 'Grey', 'Yes', 'Gasoline', 'The spectrum of coupe personalities ranges from touring to beastly, and the best often sit somewhere in the middle, blending an engaging driving experience with relative comfort. In theory, then, the Mercedes-AMG C43 should be the gold standard. The AMG\'s twin-turbocharged 3.0-liter V-6 pushes the 3908-pound two-door from zero to 60 mph in 4.1 seconds and through the quarter-mile in 12.8 at 109 mph', 480, 'Sedan\r\n'),
(2, 'Shelby 427 Cobra', 1967, 'Manual', 935000, 'Black', 'No', 'Petrol', 'When it came to power and displacement, it was no secret that Americans strongly believed that more was always better. Acutely aware of this, Carroll Shelby knew that his biggest challenge with the 427 would be to find an acceptable common ground in the marriage of the 7.0L monster engine and the lightweight damsel of an AC chassis.', 700, 'Roadster\r\n'),
(3, 'Koenigsegg Agera RS', 2018, 'Automatic', 6600000, 'Black', 'Yes', 'Premium Gasoline', 'The Agera RS is a development of the standard Agera which was first introduced in 2010, many years of development have made the RS into a fearsome track weapon and it is currently the fastest production car on the planet.', 920, 'HyperCar\r\n'),
(4, 'Lamborghini Huracan EVO', 2019, 'Automatic', 203675, 'Orange', 'Yes', 'Gasoline', 'The 2019 Huracán can be had in several variations—all of them include a mid-mounted V-10. The rear-wheel-drive coupe and convertible feature a 571-hp version of the naturally aspirated 5.2-liter engine that pairs with a seven-speed dual-clutch automatic transmission.', 500, 'Coupe\r\n'),
(5, 'Bentley Continental GT', 2018, 'Automatic', 322600, 'Blue', 'Yes', 'Gasoline', 'The Bentley Continental GT is a beautifully designed and exquisitely handcrafted grand tourer, with a completely new 6 litre W12 engine.', 620, 'Coupe\r\n'),
(6, 'Bugatti Chiron', 2017, 'Automatic', 2600000, 'Blue', 'Yes', 'Premium Gasoline', 'Bugatti says the 4400-pound Chiron is “the world’s first production sports car with 1500 hp.”The Chiron’s game is to be so unattainable, so unimaginable, so magical as to reestablish Bugatti as the ultimate automotive machine.', 800, 'Sports'),
(7, 'Aston Martin DB4', 1959, 'Manual', 501000, 'Green\r\n', 'No', 'Petrol', 'The DB4 is a road car from Aston Martin, with rear wheel drive, a front positioned engine and a 2 door coupé body style. The 6 cylinder, double overhead camshaft naturally aspirated engine has 2 valves per cylinder and a displacement of 3.7 litres.', 320, 'Sports'),
(8, 'McLaren 720S Spider', 2019, 'Automatic', 315000, 'Teal', 'Yes', 'Premium unleaded', 'A convertible supercar that’s every bit as thrilling as the Coupe.This is a car for those who see more… who look beyond convention and seek out the extraordinary.', 290, 'Coupe'),
(9, 'Rolls-Royce Phantom', 2017, 'Automatic', 492000, 'White', 'Yes', 'Premium Gasoline', 'The 2017 Rolls-Royce Phantom is one of the ultimate luxury cars on the market. Offered in four different versions, it’s often considered to be the last word in high-end opulence among modern cars, as you might expect given its enormous price tag.', 740, 'Coupe'),
(10, 'Mercedes-Benz 300 SL', 1954, 'Manual', 2000000, 'Grey', 'No', 'Petrol', 'The Mercedes-Benz 300SL stands as one of most memorable coupes of the fifties. The gullwing doors not only distinguished it, but they are a clever solution to hide the cars unique space frame chassis.', 640, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location` text,
  `location_description` text NOT NULL,
  `distance` int(11) NOT NULL,
  `location_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location`, `location_description`, `distance`, `location_price`) VALUES
(1, 'La Route De Grandes Alpes, France\r\n', 'Wild and magnificent, this spectacular road trip winds its way north from the French Riviera to Lake Geneva through the French Alps, one dramatic mountain pass after another (17 if you care to count). Snowbound in winter, it\'s a midsummer drive on some of the highest roads in Europe.', 684, 600),
(2, 'Stelvio Pass, Italy', 'Not for the faint-hearted, this legendary piece of road straddling the Swiss/Italian border with its notorious wall of 48 hairpin turns between Bormio and Stilfs (Stelvio) attracts driving enthusiasts (and masochistic cyclists and skateboarders) from around the world for the few summer months of the year it\'s open.', 42, 400),
(3, 'Route 66, USA', 'A road trip in nostalgia, Route 66 was once the main route from Chicago to California and for many, the way to a new life. It doesn\'t really exist as a designated highway any more, but you can still drive sections and follow roughly the same path – a classic, and often decidedly retro, journey through small town America.', 3800, 100),
(4, 'Pacific Coast Highway, USA', 'California\'s famous coast road, Highway 1, is a spectacular ribbon of road between San Francisco and San Diego. Highlights include Big Sur, where jagged mountains plunge down into pounding surf, fabled beach communities such as Venice and Malibu, old Spanish mission towns, art colonies, wine regions and the glitz and glamour of LA.', 1000, 175),
(5, 'Icefields Parkway, Canada', 'Expect mountain scenery on a grand scale on this drive through the heart of the Rockies. Writhing its way through two national parks between Lake Louise and Jasper via Banff, this is a ravishingly photogenic stretch of road, with glaciers, waterfalls, lakes and lots of rocky peaks. You\'ve also got a good chance of seeing bears, moose and caribou.', 232, 275),
(6, 'Hidden Highway, UK', 'Follow the black-and-white village trail (or the cider trail if you prefer) through archetypal English countryside, all endless green fields criss-crossed with drystone fences and hedges and studded with rose-clad cottages, as you meander your way along the English and Welsh border between Ross-on-Wye to the south and Chester to the north.', 280, 350),
(7, 'The Garden Route, South Africa', 'Hugging the curve of the coast around the very southern tip of Africa from Cape Town to Port Elizabeth, this celebrated touring route travels past white sandy beaches and over mountain passes through South Africa\'s holiday heartland. Named after the region\'s bountiful wildflowers, other attractions, beyond the majestic scenery, include forests with 800-year-old trees, vineyards and plenty of wildlife.', 800, 525),
(8, 'The Ring Road, Iceland', 'A lap of Iceland on the ring road (Highway 1), is one of the most desolate, but beautiful, drives in the world through an almost mythical landscape of active volcanoes (sometimes too active), glaciers, waterfalls, geo-thermal pools, spouting geysers, snow-capped mountains and iceberg-filled glacial lagoons.', 1332, 125),
(9, 'Southern Scenic Route, NZ', 'Our Kiwi cousins have always been good at calling it as it is (the island in the south is the South Island, etc) so you know that when they call a route scenic, it will be. Trailing along the southern edge of the South Island west from Dunedin before curling north through Fiordland to finish in Queenstown it delivers the best of the South Island – deserted beaches, native forests, rolling hills, snow-covered peaks, waterfalls, lakes and sounds – in one trip.', 610, 420),
(10, 'Great Ocean Road, Australia', 'You can drive around the world as much as you like, but as far as great coastal drives go it really is hard to beat our own Great Ocean Road. Tracing the coastline between Geelong and Warrnambool west of Melbourne, its mix of cliff-hugging curves, seascapes and rainforest offers a new view at every turn.', 275, 400);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` int(11) NOT NULL,
  `full_name` text,
  `review` text,
  `date_reviewed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `full_name`, `review`, `date_reviewed`) VALUES
(1, 'Vincent Soles', 'Very nice places, Amazing views & locations, Reached every expectation, and best part was the car, my wife and I had an amazing time.', 'April 2011'),
(2, 'Adam Lambert', 'Spectacular experience at Stelvio Pass; an iconic place with an Iconic car, incredibly greatful to have had this experience.\r\n', 'May 2012'),
(3, 'Devan Morgan', 'I\'ve always been a fan of cars and always dreamed of driving a luxury car, thank you Elite Drives for making this possible', 'September 2012'),
(4, 'Alex Costa', 'Wow, I think I will definitely take this opportunity again, and this time I will make sure to invite friends.', 'September 2013'),
(5, 'Robbi Jan', 'I\'ve never been a fan of cars until I took this trip just to get an experience into why people are so interested, and now I\'m hooked.', 'January 2014'),
(6, 'Stephen Howson', 'OH. MY. GOODNESS. Incredible scenery, a beer, and some of the most incredible cars in the world? Sign me up again.', 'January 2015'),
(7, 'Adam McKola', 'This was an experience and a half, WOWWWWWW!!!!!!!!!!!!!', 'March 2017'),
(8, 'Sara Patterson', 'As a car enthusiasts let me just say, this was incredible.', 'October 2018'),
(9, 'Kate Abdo', 'I\'ve always wanted to take a drive in South Africa and this website allowed me to. Can\'t wait to do this again.', 'December 2019'),
(10, 'Nina Jacobs', 'This was an incredible experience.', 'February 2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Vladimir', 'Ceja', 'vceja', 'vceja'),
(2, 'Solomon', 'Gebretatios', 'sgebretatios', 'sgebretatios'),
(3, 'Kelvin', 'Lartey', 'klartey', 'klartey'),
(4, 'test', 'user', 'testuser', 'testuser'),
(5, 'Antonio', 'Fernandez', 'afernandez', 'afernandez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
