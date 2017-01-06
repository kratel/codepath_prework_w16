# codepath_prework_w16
codepath prework project for Web Security Course hosted at CCNY
# Pre-work - *TipCalc*

TipCalc is a tip calculator PHP page.

Submitted by: **Santiago Salas**

Time spent: **7.5** hours spent in total

## User Stories
### John
John goes to eat dinner after work. He decides to go to a local diner orders some steak and afterwards some pie for dessert. His bill comes to $22.58. The recommended tip percentage is 10% but John felt he had exquisite service so he decides to tip 20%. Since the bill is at such an inconvenient number he decides to use TipCalc to calculate how much he should pay in total. At first he types something other than a number in the subtotal section, but is reminded of his mistake and corrects it.

### Eric and siblings
Eric goes out to lunch with his two brothers. When they receive the bill they decide to pay a 15% tip. Eric opens the TipCalc app to fill in the subtotal of $38.88 and choose the 15% tip option. He then puts the number of people to split with as 3. Initially Eric accidentaly deletes the default value of 1 for people to split the bill and is reminded to input a proper value. After accidentaly inputting 3.3 he reminded to input a proper number of people. They easily and quickly see how much they each have to pay and how much they contribute to the tip.

### Ben
Ben goes out to have dinner with his family and friends, a party totaling 11 people (including Ben). At this restaurant a tip % of 24% is deemed appropriate for parties of 8 or greater. His subtotal is $146.90. He opens up TipCalc to calculate how to split the bill. He inputs the subtotal and persons to split the bill with, but after selecting a custom tip leaves the field blank. The app reminds him to select an appropriate tip or input a valid custom tip. He then inputs 24 as the custom tip percentage and receives his calculated totals.

### Richard
Richard goes to a grand opening of a new restaurant. He recently sold his company and decided to treat everyone in the restaurant. The bill subtotal comes to $1000, he opens TipCalc to calculate how much he should tip. He is delighted to see that his totals are easy to read with commas seperating the thousands. He then goes back the next night and offers to treat everyone again. Due to the success of the first night more people are here and the bill subtotal is $1,000,000. Richard opens up TipCalc knowing that the totals will be easy to read and he can quickly calculate his total with tip.

The following **required** functionality is complete:
* [x] User can enter a bill amount, choose a tip percentage, and submit the form to see the tip and total values.
* [x] Tip percentage choices use a PHP loop to output three radio buttons.
* [x] PHP code sets reasonable default values for the form.
* [x] PHP code confirms the presence and correct format of submitted values.
* [x] Page indicates any form errors which need to be fixed.
* [x] Submitted form values are retained when errors or results are shown.

The following **optional** features are implemented:
* [x] Add support for custom tip percentage
* [x] Add support for splitting the tip and total

The following **additional** features are implemented:

* [ ] List anything else that you can get done to improve the functionality!

## Video Walkthrough

Here's a walkthrough of implemented user stories:

![TipCalc Demo 1.1](http://i.imgur.com/RmK0uET.gifv "Video Walkthrough")

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Figuring out appropriate colors was challenging for me. I went through several combinations before deciding what would be easy to look at. Another challenge I encountered was pre-populating the radio button choice. Since they were done in a loop my first guess was to check each case there but since they all had the same name I realized I would have to check the value. I then thought it would be easier to create a variable before the loop to mark on which iteration to mark a button as checked. The in my loop I would just check the variable to see if I was at the correct iteration.

## License

    Copyright [2017] [Santiago Salas]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.