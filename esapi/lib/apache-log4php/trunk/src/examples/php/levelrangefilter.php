<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP Version 5.
 */
 require_once dirname(__FILE__).'/../../main/php/Logger.php';
 
Logger::configure(dirname(__FILE__).'/../resources/levelrangefilter.xml');
$logger = Logger::getRootLogger();
$logger->debug("This is a debug message");
$logger->info("This is an info message");
$logger->warn("This is a warning");
$logger->error("This is an error");
$logger->fatal("This is a fatal error");
?>
