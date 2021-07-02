
--
-- Database: `db_absidy`
--

CREATE DATABASE IF NOT EXISTS `db_absidy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_absidy`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

DROP TABLE IF EXISTS `tbl_data`;
CREATE TABLE `tbl_data`(
  `id` int(10) NOT NULL,
  `fld_city` varchar(40) NOT NULL,
   `fld_area` varchar(40) NOT NULL,
  `fld_crime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;


