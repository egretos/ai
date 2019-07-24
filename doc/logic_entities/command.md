# Command

Command - it's logic entity, what runs single simple action in EAI frame. 
Command is always hardcoded. It means each command has eponymous class in code.

Every command must to use `App\AI\Command` namespace, and implement `ICommand` interface.

## Usage

Command is not an AI entity. It's access point withs EAI and third-party system like 
API, OS, WEB, DB, Client or others. Every command must to do one simple action, simple
as possible. Duty of command is to be a middleware between EAI processes and other entities in real world.

## Examples

Raw command call:

`:<command-name> '<command-data>'`

Example:

`:output 'This message you will see in your standart output device, little human'`

Three standard commands for each frames - `read`, `output` and `write`.
'read' selects data from storage.
'write' write data to storage.
'output' transmits data to device output. 