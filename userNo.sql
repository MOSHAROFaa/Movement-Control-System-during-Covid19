SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `utm_mco`

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `created` date DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `created`) VALUES
(1, 'Mosharof',  '8cb2237d0679ca88db6464eac60da96345513964', 'student', '2021-07-09'),
(2, 'Dr Jubair', '8cb2237d0679ca88db6464eac60da96345513964', 'Academic Advisor', '2021-07-09'),
(3, 'Dr Hanif', '8cb2237d0679ca88db6464eac60da96345513964', 'Principle','2021-07-09'),
(4, 'Mr Kadir', '8cb2237d0679ca88db6464eac60da96345513964', 'UTM security','2021-07-09'),
(5, 'Masum',  '8cb2237d0679ca88db6464eac60da96345513964', 'student','2021-07-09');


-- password 12345 encripted in SHA1


-- Indexes for table `users`
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
 
  


-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
  
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
