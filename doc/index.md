# EAI documentation

EAI - it is distributed system, which designed as a middleware between man and machine.
EAI can understand man language and interpret it into machine code.

### System architecture

EAI has modules called Frames. Every single frame has responsibilities defined by 
its creator and its purpose.
EAI has endpoints. Endpoint - it is client which uses opportunities of EAI. 
Endpoint can to be a website, Android app, devise based on Arduino or any other hardware or software.
Endpoint must to transmit data from man to EAI core frame, and nothing else.

#### Logic Entities:

- [Command](logic_entities/command.md) - can run **one** action. Hard coded.
- Interpreter - can interpret text into procedures or commands
- Procedure - Can call any commands. Calls are successive.
- Event - Creates when some procedure or command done or failed, or something important happens. Can call another process
- Listener - Listen events and messages. Can run procedures.
- Strategy - Has scripts for executing processes. Behavior can be changed by conditions.
- Memento - Can store edge states and save it as **Snapshots**
- Proxy - Uses as middleware with Edges and Logic Entities.
- Composite - Can compose vertexes into graph structure.
- Iterator - Give a functional to access data collections

#### Session:

- AI context - store all entities what AI used for session
- User context - store simple data about user words.

#### Vertexes:

#### Edges:

- Can
- Number
- Has
- Creator
- HasAccess

