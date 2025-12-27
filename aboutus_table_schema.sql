-- ============================================
-- ABOUTUS TABLE SCHEMA
-- Based on usage in index.php
-- ============================================

CREATE TABLE IF NOT EXISTS `aboutus` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `image` VARCHAR(255) DEFAULT NULL,
    `vision_name` VARCHAR(255) DEFAULT NULL,
    `vision_description` TEXT,
    `exceptation_name` VARCHAR(255) DEFAULT NULL COMMENT 'Note: Typo in field name - should be expectation_name',
    `expt_description` TEXT COMMENT 'Note: Shortened field name for expectation description',
    `created_at` DATETIME DEFAULT NULL,
    `updated_at` DATETIME DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sample INSERT query (uncomment and modify as needed)
/*
INSERT INTO `aboutus` (
    `name`, 
    `description`, 
    `image`, 
    `vision_name`, 
    `vision_description`, 
    `exceptation_name`, 
    `expt_description`,
    `created_at`
) VALUES (
    'Dr. Jadhav Multi-specialty Hospital',
    'Your hospital description here...',
    'about-us-image.jpg',
    'Our Vision',
    'Your vision description here...',
    'Our Expectations',
    'Your expectations description here...',
    NOW()
);
*/

