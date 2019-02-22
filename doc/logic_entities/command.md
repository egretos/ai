# Command

Command - it's logic entity, what runs single simple action in EAI system. 
Command is always hardcoded. It means each command has class in code system.
It uses `App\AI\Command` namespace, and must to implement `ICommand` interface.

## Usage

Command is not an AI entity. It's access point withs EAI and third-party system like 
API, OS, WEB, DB, Client or others. Every command must to do one simple action, simple
as possible. Duty of command is to be a middleware between EAI processes and other entities in real world.

## Examples

Raw command call:

`:write 'This message you will see in your standart output device, little human'`

Two standard commands for each systems - `read` and `write`.
'read' selects data from storage.
'write' transmits data to  device output.